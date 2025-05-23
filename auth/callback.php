<?php

session_start();
require_once '../vendor/autoload.php';
require_once '../config/database.php';
include'../email/email.php';

// Google Client Setup
$googleClient = new Google_Client([
    'client_id' => 'YOUR_CLIENT_ID',
    'client_secret' => 'YOUR_CLIENT_SECRET',
    'redirect_uri' => 'http://localhost/traveltogether/auth/callback.php'
]);
$googleClient->addScope(['email', 'profile']);

// Facebook Client Setup
$fb = new Facebook\Facebook([
    'app_id' => 'YOUR_APP_ID',
    'app_secret' => 'YOUR_APP_SECRET',
    'default_graph_version' => 'v11.0'
]);

// Get requested role from session (set in login page)
$requestedRole = isset($_SESSION['requested_role']) ? $_SESSION['requested_role'] : 'tourist';

// Function to check if user exists with specific role and fetch their data
function getUserData($user_id, $role = null) {
    global $conn;
    
    if ($role === null) {
        // If no role specified, just get user by ID
        $stmt = $conn->prepare("SELECT user_id, email, first_name, last_name, profile, role, is_verified FROM users WHERE user_id = ?");
        $stmt->bind_param("s", $user_id);
    } else {
        // Get user by ID and role
        $stmt = $conn->prepare("SELECT user_id, email, first_name, last_name, profile, role, is_verified FROM users WHERE user_id = ? AND role = ?");
        $stmt->bind_param("ss", $user_id, $role);
    }
    
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();
    return $result;
}

// Function to check if email exists with a specific role
function getUserByEmail($email, $role) {
    global $conn;
    $stmt = $conn->prepare("SELECT id, email, first_name, last_name, profile, role, is_verified FROM users WHERE email = ? AND role = ?");
    $stmt->bind_param("ss", $email, $role);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();
    return $result;
}

// Function to send registration email
function sendRegistrationEmail($email, $first_name, $role) {
    $subject = "Welcome to TravelTogether Manila!";

    if ($role == 'business') {
        $body = "
        <h3>Dear $first_name,</h3>
        <p>Welcome to TravelTogether Manila as one of our valued <strong>Business Partners</strong>! 🏢</p>
        <p>We're excited to collaborate with you and help you connect with travelers seeking authentic experiences in Manila. You can now promote your services, tours, or establishments on our platform and reach a broader audience.</p>
        <p>If you need any support or have questions about getting started, feel free to contact our Business Support team at [business support email] or call [business phone number].</p>
        <p>Let's grow together!</p>
        ";
    } else {
        $body = "
        <h3>Dear $first_name,</h3>
        <p>Thank you for joining TravelTogether Manila as a <strong>Tourist</strong>! 🌍</p>
        <p>We’re thrilled to have you on board. Get ready to explore, connect, and experience the vibrant culture and beautiful destinations of Manila with ease.</p>
        <p>If you ever need help planning your trip or navigating the platform, our support team is here to assist you at [tourist support email] or [tourist phone number].</p>
        <p>Happy travels!</p>
        ";
    }

    return sendEmail($email, $subject, $body); 
}


// Function to insert user data 
function insertUserData($email, $first_name, $last_name, $profile, $role) {
    global $conn;

    // Check if user already exists
    if (getUserByEmail($email, $role)) return true;

    $is_verified = 1;
    $stmt = $conn->prepare("INSERT INTO users (email, first_name, last_name, profile, role, is_verified) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $email, $first_name, $last_name, $profile, $role, $is_verified);

    $inserted = $stmt->execute();
    $stmt->close();

    if ($inserted) {
        sendRegistrationEmail($email, $first_name, $role);
    }

    return $inserted;
}

// Detect if the request is for Google login
if (isset($_GET['code']) && isset($_SESSION['oauth2state']) && $_GET['state'] === $_SESSION['oauth2state']) {
    $accessToken = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['google_access_token'] = $accessToken;

    $googleUser = (new Google_Service_Oauth2($googleClient))->userinfo->get();
    $userData = getUserByEmail($googleUser['email'], $requestedRole);

    if (!$userData) {
        insertUserData($googleUser['email'], $googleUser['given_name'], $googleUser['family_name'], $googleUser['picture'], $requestedRole);
        $userData = getUserByEmail($googleUser['email'], $requestedRole);
    }
    
    $_SESSION['user_id'] = $userData['id']; // This is the primary key    
    $_SESSION['email'] = $userData['email'];
    $_SESSION['first_name'] = $userData['first_name'];
    $_SESSION['last_name'] = $userData['last_name'];
    $_SESSION['profile'] = $userData['profile'];
    $_SESSION['role'] = $userData['role'];
    $_SESSION['is_verified'] = $userData['is_verified'];

    // Redirect based on role
    if ($userData['role'] == 'business') {
        header('Location: ../localbusiness/dashboard.php');
    } else {
        header('Location: ../index.php');
    }
    exit();
}

// Detect if the request is for Facebook login
if (isset($_GET['code']) && isset($_GET['state'])) {
    $accessToken = $fb->getRedirectLoginHelper()->getAccessToken();

    if (isset($accessToken)) {
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        $facebookUser = $fb->get('/me?fields=id,first_name,last_name,email,picture', $accessToken)->getGraphUser();
        
        $userData = getUserByEmail($facebookUser['email'], $requestedRole);

        if (!$userData) {
            insertUserData($facebookUser['email'], $facebookUser['first_name'], $facebookUser['last_name'], $facebookUser['picture']['url'], $requestedRole);
            $userData = getUserByEmail($facebookUser['email'], $requestedRole);
        }
        
        $_SESSION['user_id'] = $userData['id']; // This is the primary key        
        $_SESSION['email'] = $userData['email'];
        $_SESSION['first_name'] = $userData['first_name'];
        $_SESSION['last_name'] = $userData['last_name'];
        $_SESSION['profile'] = $userData['profile'];
        $_SESSION['role'] = $userData['role'];
        $_SESSION['is_verified'] = $userData['is_verified'];

        // Redirect based on role
        if ($userData['role'] == 'business') {
            header('Location: ../localbusiness/dashboard.php');
        } else {
            header('Location: ../index.php');
        }
        exit();
    }
}
?>