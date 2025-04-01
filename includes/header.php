<?php
    $base_url = "..";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/tourists.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <title>Navbar</title>
</head>
<body>

    <nav class="nav-container">
        <a href="#" class="nav-logo">TRAVEL TOGETHER</a>

        <div class="nav-menu" id="nav-menu">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="home.php" class="nav-link active-nav">Home</a>
                </li>
                <li class="nav-item">
                    <a href="destination.php" class="nav-link">Destinations</a>
                </li>
                <li class="nav-item">
                    <a href="hotel.php" class="nav-link">Hotels</a>
                </li>
                <li class="nav-item">
                    <a href="activities.php" class="nav-link">Activities</a>
                </li>
            </ul>

            <!--CLOSE BUTTON-->
            <div class="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>
        
        <!--LOGIN, SIGNUP and Menu Buttons-->
        <div class="nav-actions" style="display:none;">
            <div class="search-btn"><i class="ri-search-line"></i></div>
            <div class="nav-search" id="navSearch">
                <input type="text" id="navbarSearch" placeholder="Search Destinations, Hotels and Activities. . .">
                <button class="searchbar-btn">Search</button>
                <i class="ri-close-line close-search" id="closeSearch"></i>
            </div>
            <button class="button-btn2 list-prop">List your property</button>
            <button class="button-btn1 login-btn">Sign In</button>
            <div class="user-logo"><i class="ri-user-line"></i></div>
            <div class="toggle-menu" id="toggle-menu"><i class="ri-menu-line"></i></div>
        </div>

        <div class="nav-actions logged-in">
            <div class="user-cart">
                <i class="ri-heart-fill"></i>
                <span class="cart-badge">3</span>
            </div>
            <div class="user-saved-list">
                <div class="saved-cont">
                    <div class="saved-item">
                        <img src="<?php echo $base_url;?>/assets/images/destinations/luneta.jpg" alt="Paris">
                        <div class="saved-item-info">
                            <h3>Paris, France</h3>
                            <p>The museum is the imposing stone-and-wood structure c. 1850, one of the grand houses in Barrio San Luis (one of the four original villages of Intramuros) is located across historic San Agustin church and bounded by Calle Real, General Luna, Cabildo and Urdaneta streets. The other two are the Los Hidalgos, c. 1650 and Cuyugan Mansion, c. 1890.The museum is the imposing stone-and-wood structure c. 1850, one of the grand houses in Barrio San Luis (one of the four original villages of Intramuros) is located across historic San Agustin church and bounded by Calle Real, General Luna, Cabildo and Urdaneta streets. The other two are the Los Hidalgos, c. 1650 and Cuyugan Mansion, c. 1890.</p>
                            <p class="price">₱1200</p>
                        </div>
                    </div>
                    <div class="saved-item">
                        <img src="<?php echo $base_url;?>/assets/images/destinations/fort.jpg" alt="Tokyo">
                        <div class="saved-item-info">
                            <h3>Tokyo, Japan</h3>
                            <p>Blend of tradition and technology.</p>
                            <p class="price">₱1500</p>
                        </div>
                    </div>
                    <div class="saved-item">
                        <img src="<?php echo $base_url;?>/assets/images/destinations/casa.jpg" alt="New York City">
                        <div class="saved-item-info">
                            <h3>New York City, USA</h3>
                            <p>The city that never sleeps.</p>
                            <p class="price">₱1300</p>
                        </div>
                    </div>
                </div>
                <div class="saved-container-button">
                    <button class="button-btn1 saved-button">Go to save</button>
                </div>
            </div>
            <div class="user-profile">
                <img src="../assets/images/admin-profile.jpg" alt="Profile">
            </div>
            <div class="user-menu">
                <ul>
                    <li><i class="ri-user-line"></i><a href="#">Profile</a></li>
                    <li><i class="ri-calendar-line"></i><a href="#">Bookings</a></li>
                    <li><i class="ri-wallet-2-line"></i><a href="#">Payment Methods</a></li>
                    <li><i class="ri-star-line"></i><a href="#">Reviews</a></li>
                    <li><i class="ri-file-list-3-line"></i><a href="#">Iteneries</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>

        <!-- LOGIN CONTAINER -->
        <div class="login-container">
            <div class="login-content">
                <div class="login-container-close">
                    <i class="ri-close-line"></i>
                </div>
                <h2 class="login-title">Sign in or create an account</h2>
                <form action="">
                    <div class="login-input">
                        <input type="email" name="email" id="email" placeholder="Please enter your email address" required>
                        <button class="button-login" type="submit">Continue</button>
                    </div>
                    <div class="other-methods">
                        <p><i class="left-line"></i>Other Methods<i class="right-line"></i></p>
                        <div class="methods-icon">
                            <button class="social-btn"><i class="ri-facebook-circle-fill"></i></button>
                            <button class="social-btn"><i class="ri-google-fill"></i></button>
                        </div>
                    </div>
                    <div class="terms">
                        <p>By signing in or registering, you are deemed to have agreed to the Travel Together <a href="#">Terms and Conditions</a> and <a href="#">Privacy Statement</a></p>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    
</body>
</html>