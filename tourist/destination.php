<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <title>Destination</title>
</head>
<body>

    <?php include '../includes/header.php'; ?>

    <section class="destination">
        <div class="destination-main-slider">
            <div class="destination-main">
              <div class="image-slider">
                <img src="<?php echo $base_url;?>/assets/images/manila-img1.jpg" class="slider-image active" alt="">
                <img src="<?php echo $base_url;?>/assets/images/manila-img2.jpg" class="slider-image" alt="">
                <img src="<?php echo $base_url;?>/assets/images/manila-img3.jpg" class="slider-image" alt="">
                <img src="<?php echo $base_url;?>/assets/images/manila-img4.jpg" class="slider-image" alt="">
                <img src="<?php echo $base_url;?>/assets/images/manila-img5.jpg" class="slider-image" alt="">
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
          
          <div class="manila-desc-container">
            <h2>Manila</h2>
            <p>Manila, the capital of the Philippines, is a bustling metropolis known for its rich history, vibrant culture, and modern skyscrapers. Situated along Manila Bay, the city offers a blend of the old and new — from historic landmarks like Intramuros and Rizal Park to lively shopping districts and nightlife hubs. As a gateway to the country, Manila serves as a center for commerce, education, and tourism, making it a dynamic destination for both locals and travelers.</p>
          </div>

          <div class="top-manila-header">
            <h3>Famous Spots in Manila</h3>
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
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Plaza San Luis Complex, General Luna corner Real Streets, Intramuros, Manila</p>
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
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Plaza de Armas, Fort Santiago, Intramuros, Manila, Philippines</p>
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
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Palacio del Gobernador in Plaza Roma.</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">Intramuros Old Town, Manila City's historic walled district, invites you to step back in time and explore the Philippines' rich past. Established over 400 years ago by Spanish colonizers, it served as their political and military stronghold in Asia. Today, Intramuros Old Town is one of the best places to visit in Manila City, offering visitors a glimpse into the country's storied history through its preserved architecture and cultural landmarks.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/luneta.jpg" alt="">
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
                <p class="destination-desc">Hailed as one of the largest urban parks in Asia, Rizal Park, Luneta is one of Manila's iconic destinations as the "birthplace of Philippine nationalism". It is the final resting place of Philippine national hero, Dr. Jose Rizal, where one can witness the changing of the guards, and a sacred site for many Filipinos martyred during the Spanish colonial era. Today, it is a favorite place for Filipino families and tourists to gather, learn about Philippine history, culture and heritage through its numerous gardens, plazas, and monuments.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/san-agustin.jpg" alt="">
                <h4 id="locationName">San Agustin Church</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">General Luna St, Intramuros, Manila, 1002 Metro Manila</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">The Archdiocesan Shrine of Our Lady of Consolation and Cincture, also known as the Church of Saint Augustine and Immaculate Conception Parish, is a Roman Catholic church under the auspices of the Order of Saint Augustine located inside the historic walled city of Intramuros in Manila, Philippines.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/china-town.jpg" alt="">
                <h4 id="locationName">China Town</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Reina Regente St, Binondo, Manila, 1006 Metro Manila</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">The world’s oldest Chinatown, Binondo is a bustling district filled with temples, shops, and delicious Chinese food. People visit for authentic dim sum, noodles, and the lively mix of Filipino and Chinese cultures.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/manila-bay.jpg" alt="">
                <h4 id="locationName">Manila Bay</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">Manila Bay Beach, Roxas Blvd, Manila</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">Famous for its breathtaking sunset, Manila Bay is a popular spot for evening walks and sightseeing. The bay area has restaurants, parks, and spots to relax while enjoying the sea breeze and city skyline.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/national-museum.jpg" alt="">
                <h4 id="locationName">National Museum</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress"> National Museum of Fine Arts, Padre Burgos Ave, Ermita, Manila</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">This museum complex showcases the Philippines' rich history, art, and culture. It has different sections, including the National Museum of Fine Arts, Anthropology, and Natural History, where visitors can see paintings, ancient artifacts, and even dinosaur fossils.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/ocean-park.jpg" alt="">
                <h4 id="locationName">Manila Ocean Park</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">666 Behind, Quirino Grandstand, Ermita, Manila, 1000 Metro Manila</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">A fun and educational marine park, Manila Ocean Park features giant aquariums, interactive animal shows, and underwater tunnels. Visitors can see sharks, stingrays, and colorful fish up close, making it a great attraction for families and ocean lovers.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>

            <div class="default-card dest">
                <div class="saved-destination"><i class="ri-heart-line"></i></div>
                <img src="<?php echo $base_url;?>/assets/images/destinations/paco-park.jpg" alt="">
                <h4 id="locationName">Paco Park</h4>
                <p class="entrance-fee">₱<span>Free</span></p>
                <div class="place-categories">
                    <div class="place-category">
                        <i class="ri-award-line"></i>
                        <p>Historical Site</p>
                    </div>
                </div>
                <div class="location"> 
                    <p class="address" id="locationAddress">HXJQ+99M, Belen, Paco, Manila, Metro Manila</p>
                    <button class="showMapBtn">Show on map</button>
                </div>
                <p class="destination-desc">A peaceful and historic park that was once a cemetery during Spanish rule. It has a small chapel, landscaped gardens, and circular walls that create a quiet, romantic setting, perfect for unwinding or small gatherings.</p>
                <span class="read-more"><div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div></span>
            </div>
          </div>
        
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
    <?php include '../includes/footer.php'; ?>


    </section>

    <script src="<?php echo $base_url;?>/script.js"></script>
    <script src="<?php echo $base_url;?>/assets/js/tourists.js"></script>
</body>
</html>