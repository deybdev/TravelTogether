// LOGIN CONTAINER FUNCTION START
const signInBtn = document.querySelector('.login-btn');
const signInBtn1 = document.querySelector('.user-logo');
const loginContainer = document.querySelector('.login-container');
const closeBtn = document.querySelector('.login-container-close');

signInBtn1.addEventListener('click', () => {
  loginContainer.classList.add('show-login-container');

  setTimeout(() => {
    loginContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    searchBar.classList.remove('show-search');

  }, 750);
});

signInBtn.addEventListener('click', () => {
  loginContainer.classList.add('show-login-container');

  setTimeout(() => {
    loginContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
  }, 750);
});

closeBtn.addEventListener('click', () => {
  loginContainer.classList.remove('show-login-container');
  loginContainer.style.backgroundColor = 'transparent';
});
// LOGIN CONTAINER FUNCTION END


// READ MORE FUNCTION START
const readMoreBtns = document.querySelectorAll('.read-more, .review-read-more');

readMoreBtns.forEach(button => {
    button.addEventListener('click', function(event) {
        event.stopPropagation();
        
        const isDestination = this.closest('.dest');
        const isReview = this.closest('.review');
        
        if (isDestination) {
            const destinationImg = isDestination;
            destinationImg.classList.toggle('expanded');
            
            if (destinationImg.classList.contains('expanded')) {
                this.innerHTML = '<div class="left-line"></div>Read Less <i class="ri-arrow-up-wide-line"></i><div class="right-line"></div>';
            } else {
                this.innerHTML = '<div class="left-line"></div>Read More <i class="ri-arrow-down-wide-line"></i><div class="right-line"></div>';
            }
        } else if (isReview) {
            const reviewText = isReview.querySelector('.review-desc');
            reviewText.classList.toggle('expanded');
            
            if (reviewText.classList.contains('expanded')) {
                this.innerHTML = 'Read Less';
            } else {
                this.innerHTML = 'Read More';
            }
        }
    });
});
// READ MORE END

// SHOW MAP FUNCTION START
document.querySelectorAll(".showMapBtn").forEach(button => {
    button.addEventListener("click", function() {
      const locationCard = this.closest('.default-card');
      const locationName = locationCard.querySelector('#locationName').innerText;
      const locationAddress = locationCard.querySelector('#locationAddress').innerText;
      const imageSrc = locationCard.querySelector('img').src;
  
      // Update the popup with the location's data
      document.getElementById('mapImage').src = imageSrc;
      document.getElementById('mapTitle').innerText = locationName;
      document.getElementById('mapAddress').innerText = locationAddress;
  
      // Show the popup and disable scroll
      document.getElementById("mapPopup").style.display = "flex";
      document.body.classList.add("no-scroll");
  
      // Initialize map with the passed data
      initializeMap(imageSrc, locationName, locationAddress);
    });
  });
  
  // Close the map popup
  document.getElementById("closeMap").addEventListener("click", function() {
    
    document.getElementById("mapPopup").style.display = "none";
    document.body.classList.remove("no-scroll");
  });

// SHOW MAP FUNCTION END