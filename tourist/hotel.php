<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tourists.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <title>Hotels</title>
</head>
<body>

    <?php include "../includes/header.php"; ?>

    <!-- BOOKING SECTION START -->
    <div class="destination-main-slider">
        <div class="destination-main booking-main">
          <div class="image-slider">
            <img src="<?php echo $base_url;?>/assets/images/hotel-img1.jpg" class="slider-image active" alt="">
          </div>
          <div class="destination-main-content">
            <h2></h2>
            <p></p>
          </div>
        </div>
    </div> 
    
    <div class="booking-search-container">
        <div class="checkin" id="checkin-btn">
            <h5>Check In & Check Out</h5>
            <div class="date-info">
                <i class="ri-calendar-line"></i>
                <p id="date-range-text" class="date-info">--/--/---- to --/--/----</p>
            </div>
        </div>
        <div class="guests">
            <h5>Guests and Rooms</h5>
            <div class="user-room-info">
                <i class="ri-group-line"></i>
                <p class="user-room-info">2 Adults, 5 Children, 1 Room</p>
            </div>
        </div>
        <button class="button-btn1 search-hotel-btn"><i class="ri-search-line"></i> Search</button>
    </div>

    <div class="guests-count">
        <div class="count-column">
            <p>Rooms :</p>
            <div class="count">
                <button class="room-btn button-btn3" id="room-minus"><i class="ri-subtract-fill"></i></button>
                <p id="room-count">0</p>
                <button class="room-btn button-btn3" id="room-plus"><i class="ri-add-fill"></i></button>
            </div>
        </div>
        <div class="count-column">
            <p>Adults :</p>
            <div class="count">
                <button class="room-btn button-btn3" id="adult-minus"><i class="ri-subtract-fill"></i></button>
                <p id="adult-count">0</p>
                <button class="room-btn button-btn3" id="adult-plus"><i class="ri-add-fill"></i></button>
            </div>
        </div>
        <div class="count-column">
            <p>Children :</p>
            <div class="count">
                <button class="room-btn button-btn3" id="child-minus"><i class="ri-subtract-fill"></i></button>
                <p id="child-count">0</p>
                <button class="room-btn button-btn3" id="child-plus"><i class="ri-add-fill"></i></button>
            </div>
        </div>

        <div class="children-ages">
            <div class="child-ages-container"></div>
        </div>
        
        <button class="button-btn1 confirm-count">Confirm</button>
        
    </div>

    <!-- CALENDAR START -->
    <div class="calendar" id="calendar">
        <h2 class="main-header">CHECK IN - CHECK OUT DATES </h2>
        <div class="header">
            <div id="prev" class="btn" ><i class="ri-arrow-left-line"></i></div>
            <div id="month-year"></div>
            <div id="next" class="btn"><i class="ri-arrow-right-line"></i></div>
        </div>
        <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>
        <div class="days" id="days"></div>
    </div>
    <!-- CALENDAR END -->

    <div class="filter-icons">
        <div class="filter-icon">
            <button  id="sort-by"><i class="ri-sort-asc"></i> Sort By <i class="ri-arrow-down-line"></i></button>
            <div class="sort-dot"></div>
        </div>
        <div class="filter-icon">
            <button  id="show-filter"><i class="ri-equalizer-line"></i> Filter By <i class="ri-arrow-down-line"></i></button>
            <div class="filter-dot"></div>
        </div>
    </div>

    <div class="hotel-booking-main">

        <div class="left-hotel"> 
            <div class="filter-hotel">
                <div class="left-img">
                    <img src="<?php echo $base_url;?>/assets/images/map-manila.png" alt="" class="manila-map">  
                    <button class="map-btn button-btn3"  onclick="window.location.href='https://www.google.com/maps?q=Manila'">See Manila on Map</button>
                </div>    
                
                <div class="filter-heading">
                    <h2>Filter Hotels:</h2>
                    <div class="close-filter">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                
                <div class="by-filter" data-category="Rating">
                    <h3>Rating</h3>
                    <div class="filter">
                        <input type="checkbox" id="rating-5" value="5" data-category="Rating">
                        <label for="rating-5">5 Stars</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="rating-4" value="4" data-category="Rating">
                        <label for="rating-4">4 Stars</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="rating-3" value="3" data-category="Rating">
                        <label for="rating-3">3 Stars</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="rating-2" value="2" data-category="Rating">
                        <label for="rating-2">2 Stars</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="rating-1" value="1" data-category="Rating">
                        <label for="rating-1">1 Star</label>
                    </div>
                </div>
                
                <div class="by-filter" data-category="Amenities">
                    <h3>Amenities</h3>
                    <div class="filter">
                        <input type="checkbox" id="free-wifi" value="Free Wifi" data-category="Amenities">
                        <label for="free-wifi">Free Wifi</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="swimming-pool" value="Swimming Pool" data-category="Amenities">
                        <label for="swimming-pool">Swimming Pool</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="pet-friendly" value="Pet Friendly" data-category="Amenities">
                        <label for="pet-friendly">Pet Friendly</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="airconditioning" value="Airconditioning" data-category="Amenities">
                        <label for="airconditioning">Airconditioning</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="non-smoking" value="Non-Smoking" data-category="Amenities">
                        <label for="non-smoking">Non Smoking</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="free-parking" value="Free Parking" data-category="Amenities">
                        <label for="free-parking">Free Parking</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="free-breakfast" value="Free-Breakfast" data-category="Amenities">
                        <label for="free-breakfast">Free Breakfast</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="24-hour-check-in" value="24 Hour" data-category="Amenities">
                        <label for="24-hour-check-in">24 Hour Check In</label>
                    </div>
                </div>
                
                <div class="by-filter" data-category="Neighbourhood">
                    <h3>Neighbourhood</h3>
                    <div class="filter">
                        <input type="checkbox" id="binondo" value="Binondo" data-category="Neighbourhood">
                        <label for="binondo">Binondo</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="ermita" value="Ermita" data-category="Neighbourhood">
                        <label for="ermita">Ermita</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="malate" value="Malate" data-category="Neighbourhood">
                        <label for="malate">Malate</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="paco" value="Paco" data-category="Neighbourhood">
                        <label for="paco">Paco</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="pandacan" value="Pandacan" data-category="Neighbourhood">
                        <label for="pandacan">Pandacan</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="port-area" value="Port Area" data-category="Neighbourhood">
                        <label for="port-area">Port Area</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="quiapo" value="Quiapo" data-category="Neighbourhood">
                        <label for="quiapo">Quiapo</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="san-andres" value="San Andres" data-category="Neighbourhood">
                        <label for="san-andres">San Andres</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="san-miguel" value="San Miguel" data-category="Neighbourhood">
                        <label for="san-miguel">San Miguel</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="san-nicolas" value="San Nicolas" data-category="Neighbourhood">
                        <label for="san-nicolas">San Nicolas</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="santa-ana" value="Santa Ana" data-category="Neighbourhood">
                        <label for="santa-ana">Santa Ana</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="santa-cruz" value="Santa Cruz" data-category="Neighbourhood">
                        <label for="santa-cruz">Santa Cruz</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="santa-mesa" value="Santa Mesa" data-category="Neighbourhood">
                        <label for="santa-mesa">Santa Mesa</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="tondo" value="Tondo" data-category="Neighbourhood">
                        <label for="tondo">Tondo</label>
                    </div>
                    <div class="filter">
                        <input type="checkbox" id="sampaloc" value="Sampaloc" data-category="Neighbourhood">
                        <label for="sampaloc">Sampaloc</label>
                    </div>
                </div>
                
                <div class="filter-btn">
                    <button class="button-btn1">Confirm</button>
                </div>
                
            </div>
        </div>
        <div class="right-hotel">

            <!-- CONTAINER TO DISPLAY SELECTED FILTERS -->
            <div class="selected-filter-container">
                <ol></ol>
            </div>
            
            <div class="hotel-result-header">
                <h3>Result: <span>2,424 properties</span></h3>
                <button class="filter-sort filter-icon button-btn2"><i class="ri-sort-asc"></i> Sort by : <span class="sorted">Top reviewed</span> <i class="ri-expand-up-down-line"></i></button>
            </div>

            <div class="sort-container">
                <h4>Sort By</h4>
                <div class="close-sort">
                    <i class="ri-close-line"></i>
                </div>
                <ol>
                    <li><input type="radio" name="sortby" checked value="Top viewed">Top viewed</li>
                    <li><input type="radio" name="sortby">Top pick for solo travellers</li>
                    <li><input type="radio" name="sortby">Price (lowest first)</li>
                    <li><input type="radio" name="sortby">Price (highest first)</li>
                    <li><input type="radio" name="sortby">Property Rating (high to low)</li>
                    <li><input type="radio" name="sortby">Property Rating (low to high)</li>
                    <li><input type="radio" name="sortby">Best reviewed and lowest price</li>
                </ol>
            </div>

            <div class="default-card hotel-result">
                <img src="<?php echo $base_url;?>/assets/images/hotels/hotel2.jpg" alt="Hotel1">
                <div class="saved-hotel-booking"><i class="ri-heart-line"></i></div>
                <div class="card-content">
                    <p class="hotel-name" id="locationName">Diamond Hotel Philippines</p>
                    <div class="average-hotel-rate">
                        <p class="rate-count">7.3 </p>
                        <div class="star-rates">
                            <i class="ri-star-fill"></i>
                        </div>
                        <p class="rate-count">(4,632)</p>
                    </div>
                    <div class="location"> 
                        <p class="address" id="locationAddress">Roxas Boulevard, Corner Dr. J. Quintos Street, Manila, 1000 Metro Manila</p>
                        <button class="showMapBtn">Show on map</button>
                    </div>
                    <div class="hotel-desc">
                        <p>Superior Double or Twin Room</p>
                        <ul>
                            <li><i class="ri-check-line"></i> Pet Friendly</li>
                            <li><i class="ri-check-line"></i> Parking</li>
                            <li><i class="ri-check-line"></i> Swimming Pool</li>
                        </ul>
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
            </div>

            <div class="default-card hotel-result">
                <img src="<?php echo $base_url;?>/assets/images/hotels/hotellist1.jpg" alt="Hotel1">
                <div class="saved-hotel-booking"><i class="ri-heart-line"></i></div>
                <div class="card-content">
                    <p class="hotel-name" id="locationName">Belmont Hotel Manila</p>
                    <div class="average-hotel-rate">
                        <p class="rate-count">8.3 </p>
                        <div class="star-rates">
                            <i class="ri-star-fill"></i>
                        </div>
                        <p class="rate-count">(4,872)</p>
                    </div>
                    <div class="location"> 
                        <p class="address" id="locationAddress"></p>
                        <button class="showMapBtn">Show on map</button>
                    </div>
                    <div class="hotel-desc">
                        <p>Twin Superior</p>
                        <ul>
                            <li><i class="ri-check-line"></i> Free Breakfast</li>
                            <li><i class="ri-check-line"></i> Parking</li>
                            <li><i class="ri-check-line"></i> Swimming Pool</li>
                        </ul>
                    </div>
                    <div class="hotel-rate">
                        <div class="price">
                            <p>From <span>PHP 3,554</span></p>
                        </div>
                    </div>
                    <div class="hotel-card-btn">
                        <button class="button-btn1">Check Availability<p class="ri-arrow-right-double-fill"></p></button>
                    </div>
                </div>
            </div>

            <div class="default-card hotel-result">
                <img src="<?php echo $base_url;?>/assets/images/hotels/hotellist2.jpg" alt="Hotel1">
                <div class="saved-hotel-booking"><i class="ri-heart-line"></i></div>
                <div class="card-content">
                    <p class="hotel-name" id="locationName">Hilton Manila</p>
                    <div class="average-hotel-rate">
                        <p class="rate-count">8.8 </p>
                        <div class="star-rates">
                            <i class="ri-star-fill"></i>
                        </div>
                        <p class="rate-count">(1,406)</p>
                    </div>
                    <div class="location"> 
                        <p class="address" id="locationAddress">Plaza San Luis Complex, General Luna corner Real Streets, Intramuros, Manila</p>
                        <button class="showMapBtn">Show on map</button>
                    </div>
                    <div class="hotel-desc">
                        <p>Extra Large Double Bed</p>
                        <ul>
                            <li><i class="ri-check-line"></i> Pet Friendly</li>
                            <li><i class="ri-check-line"></i> Parking</li>
                            <li><i class="ri-check-line"></i> Swimming Pool</li>
                        </ul>
                    </div>
                    <div class="hotel-rate">
                        <div class="price">
                            <p>From <span>PHP 9,605</span></p>
                        </div>
                    </div>
                    <div class="hotel-card-btn">
                        <button class="button-btn1">Check Availability<p class="ri-arrow-right-double-fill"></p></button>
                    </div>
                </div>
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
    </div>
    <!-- MAP POP UP END -->

    <?php include "../includes/footer.php"; ?>

    <!-- BOOKING SECTION END -->

    <script src="<?php echo $base_url;?>/script.js"></script>
    <script src="<?php echo $base_url;?>/assets/js/tourists.js"></script>

</body>
</html>