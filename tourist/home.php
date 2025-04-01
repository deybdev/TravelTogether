<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url;?>/assets/css/tourists.css">
    <link rel="stylesheet" href="<?php echo $base_url;?>/styles.css">
    <title>TravelTogether</title>
</head>
<body>

    <?php include "../includes/header.php"; ?>

    <!-- HOME SECTION START -->
    <section id="home">
        <div class="gradient-home">
            <div class="home-content">
                <div class="home-texts">
                    <h1 class="slogan">Plan, Book, Explore Your Perfect Manila Trip Starts Here!</h1>
                    <p class="home-text">Sign up today and unlock a hassle-free way to discover Manila’s best attractions with ease and convenience!</p>
                    <div class="search-container">
                        <input type="text" name="search" id="search" placeholder="Search destinations, hotels and activities">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME SECTION END -->
    <!-- DESTINATIONS START -->

     <section  class="section" id="home-destinations">
        <div id="section-title">
            <h2 id="section-main-title">Find Your Best Destination</h2>
            <p id="section-sub-title">We have more than 25 famous spots you can choose from</p>
        </div>

        <div class="default-container">

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/casa.jpg" alt="">
                <h4 id="locationName">Casa Manila</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Plaza San Luis Complex, General Luna corner Real Streets, Intramuros, Manila.</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">The museum is the imposing stone-and-wood structure c. 1850, one of the grand houses in Barrio San Luis (one of the four original villages of Intramuros) is located across historic San Agustin church and bounded by Calle Real, General Luna, Cabildo and Urdaneta streets. The other two are the Los Hidalgos, c. 1650 and Cuyugan Mansion, c. 1890.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/fort.jpg" alt="">
                <h4 id="locationName">Fort Santiago</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Plaza de Armas, Fort Santiago, Intramuros, Manila, Philippines.</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">Fort Santiago is one of the oldest fortifications in Manila built by the Spaniards in 1571 from what was once a palisaded structure of logs and earth built by Rajah Soliman on the native settlement called Maynila. The colonizers recognized that the tongue of land where the Pasig River flowed into the Manila Bay was a very strategic location.  The fort was destroyed in 1574 during the Chinese attack led by Limahong.  The stone fort was built between 1589 and 1592 and was repaired and extended after being damaged by the 1645 earthquake.
                </p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/intra.jpg" alt="">
                <h4 id="locationName">Intramuros</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress"> Palacio del Gobernador in Plaza Roma.</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">Intramuros Old Town, Manila City's historic walled district, invites you to step back in time and explore the Philippines' rich past. Established over 400 years ago by Spanish colonizers, it served as their political and military stronghold in Asia. Today, Intramuros Old Town is one of the best places to visit in Manila City, offering visitors a glimpse into the country's storied history through its preserved architecture and cultural landmarks.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>
            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/luneta.jpg" alt="Rizal Park">
                <h4 id="locationName">Rizal Park</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Ermita, Barangay 666 Zone 72, Manila, 1000 Metro Manila</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">Hailed as one of the largest urban parks in Asia, Rizal Park...</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>
        </div>
        <button class="button-btn1 destination-btn" onclick="location.href='manila.html'">See All</button>
     </section>

    <!-- DESTINATIONS END -->
    <!-- HOTELS START -->

    <section class="section" id="home-bookings">
        <div id="section-title">
            <h2 id="section-main-title">Best Hotel Deals</h2>
            <p id="section-sub-title">Find your perfect stay with our hotel booking platform. Choose from hundreds of cozy, luxurious, and affordable rooms — all in one place!</p>
        </div>
        <div class="default-container">
            <div class="default-card hotel">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/hotels/hotel1.jpg" alt="Hotel1">
                <h4>Eton Tower Makati</h4>
                <div class="average-hotel-rate">
                    <p class="rate-count">7.3 </p>
                    <div class="star-rates">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <span class="blank-star">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </span>
                    </div>
                    <p class="rate-count">(4,872)</p>
                </div>
                <div class="hotel-rate">
                    <div class="price">
                        <p>From <span>PHP 2,578</span></p>
                    </div>
                </div>
                <div class="hotel-card-btn">
                    <button class="button-btn1">Check Availability<p class="ri-arrow-right-double-fill"></p></button>
                </div>
            </div>

            <div class="default-card hotel">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/hotels/hotel2.jpg" alt="Hotel1">
                <h4>Hotel 101</h4>
                <div class="average-hotel-rate">
                    <p class="rate-count">7.3 </p>
                    <div class="star-rates">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <span class="blank-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span>
                    </div>
                    <p class="rate-count">(4,872)</p>
                </div>
                <div class="hotel-rate">
                    <div class="price">
                        <p>From <span>PHP 3,874</span></p>
                    </div>
                </div>
                <div class="hotel-card-btn">
                    <button class="button-btn1">Check Availability<p class="ri-arrow-right-double-fill"></p></button>
                </div>
            </div>

            <div class="default-card hotel">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/hotels/hotel3.jpg" alt="Hotel1">
                <h4>Lub d Philippines Makati</h4>
                <div class="average-hotel-rate">
                    <p class="rate-count">7.3 </p>
                    <div class="star-rates">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <span class="blank-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span>
                    </div>
                    <p class="rate-count">(4,872)</p>
                </div>
                <div class="hotel-rate">
                    <div class="price">
                        <p>From <span>PHP 1,927</span></p>
                    </div>
                </div>
                <div class="hotel-card-btn">
                    <button class="button-btn1">Check Availability<p class="ri-arrow-right-double-fill"></p></button>
                </div>
            </div>

            <div class="hotel-card default-card">
                <img src="<?php echo $base_url;?>/assets/images/hotels/hotel4.jpg" alt="Hotel Room">
                <div class="hotel-card-content">
                    <h3>Discover great deals on hotels around manila</h3>
                    <button class="hotel-card-button button-btn3">GO NOW</button>
                </div>
            </div>
        </div>
        </section>

    <!-- HOTELS END -->
    <!-- REVIEWS START -->

    <section class="section" id="home-reviews">
        <div id="section-title">
            <h2 id="section-main-title">Honest Reviews, Smart Choices</h2>
            <p id="section-sub-title">Find your perfect stay with our hotel booking platform. Choose from hundreds of cozy, luxurious, and affordable rooms — all in one place!</p>
        </div>
        <div class="default-container">
            <div class="default-card review">
                <img src="<?php echo $base_url;?>/assets/images/reviews/review1.jpg" alt="Review">
                <div class="review-date">
                    <p>Feb <br><span>17</span></p>
                </div>
                <p class="reviewer-name"><span>By: </span>Jhana S.</p>
                <div class="star-rates">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <span class="blank-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span>
                </div>
                <h3 class="place-review">Intramuros</h3>
                <p class="review-desc">"Lovely architecture, be prepared to be chased by aggressive tricycle drivers offering a tour.
                    We tried to walk ourselves which was challenging as despite the advertised 'No vehicle' roads, the reality was there were still cars, tricycles, garbage trucks and motorcycles."</p>
                <button class="review-read-more button-btn1">Read More</button>
            </div>

            <div class="default-card review">
                <img src="<?php echo $base_url;?>/assets/images/reviews/review2.jpg" alt="Review">
                <div class="review-date">
                    <p>Dec <br><span>20</span></p>
                </div>
                <p class="reviewer-name"><span>By: </span>Lauren C.</p>
                <div class="star-rates">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <span class="blank-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span>
                </div>
                <h3 class="place-review">Fort Santiago</h3>
                <p class="review-desc">"I went to visit Fort Santiago because I was in the old town and it was ranked so highly on TripAdvisor. It was 75 pesos to enter and all I saw was construction work being done. You can only walk down one main path which is also littered with horse carts asking to give you a 'tour'. When you finally reach the top part of the fort... It's drenched in this awful smell from the nearby polluted river. Definitely a pass until they can clean it up."</p>
                <button class="review-read-more button-btn1">Read More</button>
            </div>

            <div class="default-card review">
                <img src="<?php echo $base_url;?>/assets/images/reviews/review3.jpg" alt="Review">
                <div class="review-date">
                    <p>Mar <br><span>12</span></p>
                </div>
                <p class="reviewer-name"><span>By: </span>John A.</p>
                <div class="star-rates">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <span class="blank-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span>
                </div>
                <h3 class="place-review">Casa Manila</h3>
                <p class="review-desc">"Casa Manila is a beautifully preserved museum in Intramuros that offers an immersive glimpse into the opulent lifestyle of the Filipino elite during the Spanish colonial era. The house, designed in classic Bahay na Bato style, is filled with antique furniture, intricate wooden carvings, and elegant chandeliers that transport visitors back to the 19th century."</p>
                <button class="review-read-more button-btn1">Read More</button>
            </div>

            <div class="default-card review">
                <img src="<?php echo $base_url;?>/assets/images/reviews/review4.jpg" alt="Review">
                <div class="review-date">
                    <p>Jan <br><span>1</span></p>
                </div>
                <p class="reviewer-name"><span>By: </span>Dave C</p>
                <div class="star-rates">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <span class="blank-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span>
                </div>
                <h3 class="place-review">Rizal Park</h3>
                <p class="review-desc">"Beautiful and tranquil despite being located in the middle of a busy road. A park of historical significance. From ponds and open lawns to monuments and a whole pantheon of Filipino heroes. There is a lot to see."</p>
                <button class="review-read-more button-btn1">Read More</button>
            </div>
            <button class="button-btn1 destination-btn">Read More Like This <i class="ri-arrow-right-long-line"></i></button>
        </div>
        
        </section>

    <!-- REVIEWS END -->

    <!-- MAP POP UP START -->
    <div id="mapPopup" class="show-map-container">
        <div class="close-map" id="closeMap">
            <i class="ri-close-fill"></i>
        </div>
        <div class="show-map-wrapper">
            <div class="location-info">
                <img id="mapImage" src="" alt="Rizal Park">
                <h2 id="mapTitle"></h2>
                <p id="mapAddress"></p>
            </div>
            <div id="map"></div>
        </div>
    </div>
    <!-- MAP POP UP END -->

    <?php include "../includes/footer.php"; ?>

    <script src="<?php echo $base_url;?>/script.js"></script>
    <script src="<?php echo $base_url;?>/assets/js/tourists.js"></script>
    
</body>
</html>