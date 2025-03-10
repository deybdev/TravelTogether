//MENU BUTTON FOR MOBILE DEVICES
const navMenu = document.querySelector('.nav-menu');
const navToggle = document.querySelector('.toggle-menu');
const navClose = document.querySelector('.nav-close');
const searchBar = document.querySelector('.nav-search');

navToggle.addEventListener('click', () => {
  navMenu.classList.add('show-menu');
  searchBar.classList.remove('show-search');
});

navClose.addEventListener('click', () => {
  navMenu.classList.remove('show-menu');
});

// SEARCH BUTTON FOR MOBILE DEVICES
const searchButton = document.querySelector('.search-btn');
const searchClose = document.querySelector('.close-search');

searchButton.addEventListener('click', () => {
  if (searchBar.classList.contains('show-search')) {
    searchBar.classList.remove('show-search');
  } else {
    searchBar.classList.add('show-search');
  }
});

searchClose.addEventListener('click', () => {
  searchBar.classList.remove('show-search');
});

// LOGIN CONTAINER FUNCTION
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

// READ MORE
const readMoreBtns = document.querySelectorAll('.read-more, .review-read-more');

readMoreBtns.forEach(button => {
    button.addEventListener('click', function(event) {
        event.stopPropagation();
        
        const isDestination = this.closest('.destination-img');
        const isReview = this.closest('.review-card');
        
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

// SLIDING IMAGES FUNCTION
const images = document.querySelectorAll('.slider-image');
const dots = document.querySelectorAll('.dot');
const arrows = document.querySelectorAll('.arrow');

let currentIndex = 0;
let autoSlideInterval;

function showImage(index) {
  images.forEach((img, i) => img.classList.toggle('active', i === index));
  dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
  currentIndex = index;
}

function changeSlide(step) {
  showImage((currentIndex + step + images.length) % images.length);
  resetAutoSlide();
}

arrows.forEach(arrow => {
  arrow.addEventListener('click', () => changeSlide(arrow.classList.contains('right') ? 1 : -1));
});

dots.forEach((dot, i) => {
  dot.addEventListener('click', () => {
    showImage(i);
    resetAutoSlide();
  });
});

function startAutoSlide() {
  autoSlideInterval = setInterval(() => changeSlide(1), 5000);
}

function resetAutoSlide() {
  clearInterval(autoSlideInterval);
  startAutoSlide();
}

// Initialize
showImage(currentIndex);
startAutoSlide();
