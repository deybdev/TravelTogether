<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';

// Check which method the user wants
$method = $_GET['method'] ?? null;

if (!$method) {
    die('Invalid login method.');
}

if ($method === 'google') {
    $googleClient = new Google_Client([
        'client_id' => 'YOUR_CLIENT_ID',
        'client_secret' => 'YOUR_CLIENT_SECRET',
        'redirect_uri' => 'http://localhost/traveltogether/auth/callback.php'
    ]);

    $googleClient->addScope(['email', 'profile']);

    $state = bin2hex(random_bytes(16));
    $_SESSION['oauth2state'] = $state;
    $googleClient->setState($state);

    $googleLoginUrl = $googleClient->createAuthUrl();
    header("Location: $googleLoginUrl");
    exit;
}

if ($method === 'facebook') {
    $fb = new Facebook\Facebook([
        'app_id' => 'YOUR_APP_ID',
        'app_secret' => 'YOUR_APP_SECRET',
        'default_graph_version' => 'v11.0'
    ]);

    $fbHelper = $fb->getRedirectLoginHelper();
    $fbLoginUrl = $fbHelper->getLoginUrl(
        'http://localhost/TravelTogether/auth/callback.php',
        ['email', 'public_profile']
    );

    header("Location: $fbLoginUrl");
    exit;
}

die('Unsupported login method.');
