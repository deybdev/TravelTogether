<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
    <link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/tourists.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
</head>

<body>
    
    <?php include "../includes/header.php"; ?>

    <!-- DESTINATION START -->

    <section class="destination">
        <div class="destination-main-slider">
            <div class="destination-main">
              <div class="image-slider">
                <img src="<?php echo $base_url;?>/assets/images/dest-img1.jpg" class="slider-image active" alt="">
                <img src="<?php echo $base_url;?>/assets/images/dest-img2.jpg" class="slider-image" alt="">
                <img src="<?php echo $base_url;?>/assets/images/dest-img3.jpg" class="slider-image" alt="">
                <img src="<?php echo $base_url;?>/assets/images/dest-img4.jpg" class="slider-image" alt="">
                <img src=".<?php echo $base_url;?>/assets/images/dest-img5.jpg" class="slider-image" alt="">
              </div>
    
              <!-- Arrows -->
              <button class="arrow left"><i class="ri-arrow-left-s-line"></i></button>
              <button class="arrow right"><i class="ri-arrow-right-s-line"></i></button>
          
              <!-- Dots -->
              <div class="slider-dots">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
                <span class="dot" data-index="3"></span>
                <span class="dot" data-index="4"></span>
              </div>
            </div>
          </div>          

        <div class="destination-form">
            <form action="">
                <div class="cat-cont">
                <div class="select-category custom-select">
                    <select name="category">
                        <option value="" disabled selected>Category</option>
                        <option value="1">Historical Sites</option>
                        <option value="2">Theme Parks</option>
                        <option value="3">Religious Sites</option>
                        <option value="4">Siteseeing</option>
                        <option value="5">Museum</option>
                        <option value="6">Theater</option>
                        <option value="7">Market</option>
                    </select>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
                <div class="select-price custom-select">
                    <select name="price">
                        <option value="" disabled selected>Price Range</option>
                        <option value="1">₱0 - ₱99</option>
                        <option value="2">₱100 - ₱199</option>
                        <option value="3">₱200 - ₱399</option>
                        <option value="4">₱400 - ₱599</option>
                        <option value="5">₱6000 - ₱899</option>
                        <option value="6">₱900 - ₱2000</option>
                        <option value="7">₱2000 up</option>
                    </select>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
                </div>
                <div class="search-acts">
                    <input type="text">
                    <button class="search-acts-btn"><i class="ri-search-line"></i></button>
                </div>
            </form>
        </div>
        

        <div class="default-container">
            <div class="default-card">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/casa.jpg" alt="">
                <h4>Casa Manila</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="location"><a href="https://www.google.com/maps/dir/?api=1&destination=CasaManila" target="_blank"><i class="ri-map-pin-line"></i> See in google maps</a></div>
                <p class="destination-desc">The museum is the imposing stone-and-wood structure c. 1850, one of the grand houses in Barrio San Luis (one of the four original villages of Intramuros) is located across historic San Agustin church and bounded by Calle Real, General Luna, Cabildo and Urdaneta streets. The other two are the Los Hidalgos, c. 1650 and Cuyugan Mansion, c. 1890.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>
          </div>

    </section>

    <!-- DESTINATION EMD -->

    <section class="section" id="subfooter">
        <div id="section-title">
            <h2 id="section-main-title">Your Next Adventure Starts Here!</h2>
            <p id="section-sub-title">Uncover the hidden gems of Manila and beyond. From personalized itineraries to seamless bookings, we make every journey unforgettable. Your dream destination is just a click away,  let’s travel together!</p>
        </div>

        <div class="subfooter-container">
            <img src="/assets/subfoot1.png" alt="">
            <img src="/assets/subfoot2.png" alt="">
        </div>
     </section>


     <?php include "../includes/footer.php"; ?>

    <script src="<?php echo $base_url;?>/script.js"></script>
    <script src="<?php echo $base_url;?>/assets/js/tourists.js"></script>

</body>
</html>