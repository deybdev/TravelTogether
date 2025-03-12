// FADE IN SCROLL EFFECT FOR CONTAINERS
const cont = document.querySelectorAll('.default-container, #section-title' );

document.addEventListener('scroll', () => {
  cont.forEach((container) => {
    if (isInView(container) && !container.classList.contains('show')) {
      container.classList.add('show');
    }else if (!isInView(container) && container.classList.contains('show')) {
      container.classList.remove('show');
    }
  });
});

function isInView(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.bottom > 0 &&
    rect.top < (window.innerHeight - 150 || document.documentElement.clientHeight - 150)
  );
}




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

document.addEventListener('DOMContentLoaded', () => {
  const checkinBtn = document.getElementById('checkin-btn');
  const showCalendar = document.getElementById('calendar');
  const monthYear = document.getElementById('month-year');
  const daysContainer = document.getElementById('days');
  const prevButton = document.getElementById('prev');
  const nextButton = document.getElementById('next');
  const dateRangeText = document.getElementById('date-range-text');  // Add reference to the p element
  const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  let currentDate = new Date(), today = new Date(), selectedStartDate = null, selectedEndDate = null;

  const renderCalendar = (date) => {
    const year = date.getFullYear(), month = date.getMonth(), firstDay = new Date(year, month, 1).getDay(), lastDay = new Date(year, month + 1, 0).getDate();
    const totalDays = 42; // 6 rows * 7 columns

    monthYear.textContent = `${months[month]} ${year}`;
    daysContainer.innerHTML = '';
    
    let dayCount = 1;

    // Render Previous Month Dates (for the first row to align with the correct starting day)
    const prevMonthLastDay = new Date(year, month, 0).getDate();
    for (let i = firstDay; i > 0; i--) {
      const prevMonthDate = new Date(year, month, 1 - i), dayDiv = document.createElement('div');
      dayDiv.textContent = prevMonthDate.getDate();
      dayDiv.classList.add('fade', 'other-month', 'disabled');
      daysContainer.appendChild(dayDiv);
      dayCount++;
    }

    // Render Current Month Dates
    for (let i = 1; i <= lastDay; i++) {
      const currentCellDate = new Date(year, month, i), dayDiv = document.createElement('div');
      dayDiv.textContent = i;
      if (currentCellDate.toDateString() === today.toDateString()) dayDiv.classList.add('today');
      if (currentCellDate < today) dayDiv.classList.add('disabled');
      dayDiv.addEventListener('click', () => handleDayClick(currentCellDate, dayDiv));
      daysContainer.appendChild(dayDiv);
      dayCount++;
    }

    // Render Next Month Dates to fill the remaining slots (if any)
    for (let i = 1; dayCount <= totalDays; i++) {
      const dayDiv = document.createElement('div');
      dayDiv.textContent = i;
      dayDiv.classList.add('fade', 'other-month', 'disabled');
      daysContainer.appendChild(dayDiv);
      dayCount++;
    }

    // Hide Previous Button if Current Month
    prevButton.style.visibility = (year === today.getFullYear() && month === today.getMonth()) ? 'hidden' : 'visible';
  };

  const handleDayClick = (currentCellDate, dayDiv) => {
    // If the clicked date is before today, don't do anything
    if (dayDiv.classList.contains('disabled')) return;

    // If no start date is selected or an end date is already selected, set the start date
    if (!selectedStartDate || selectedEndDate) {
      selectedStartDate = currentCellDate;
      selectedEndDate = null;
      resetSelection(); // Reset other selections
      dayDiv.classList.add('selected');
    } else if (!selectedEndDate && currentCellDate > selectedStartDate) {
      // If an end date is not selected, set the end date and mark the range
      selectedEndDate = currentCellDate;
      markRange();
      updateDateRangeText();  // Update the date range display
      hideCalendar();  // Hide the calendar after selection
    } else {
      // If the user clicks on a date before the start date or invalid range, reset the selection
      selectedStartDate = currentCellDate;
      selectedEndDate = null;
      resetSelection(); // Reset other selections
      dayDiv.classList.add('selected');
    }
  };

  const resetSelection = () => {
    // Reset all date selections
    const allDayDivs = Array.from(daysContainer.getElementsByTagName('div'));
    allDayDivs.forEach(dayDiv => {
      dayDiv.classList.remove('selected', 'start-date', 'end-date', 'in-range');
    });
  };

  const markRange = () => {
    // Mark the selected start date, end date, and the in-range dates
    Array.from(daysContainer.getElementsByTagName('div')).forEach((dayDiv) => {
      const dayNumber = parseInt(dayDiv.textContent), currentCellDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), dayNumber);
      if (!dayDiv.classList.contains('other-month') && !dayDiv.classList.contains('disabled')) {
        if (currentCellDate.getTime() === selectedStartDate.getTime()) dayDiv.classList.add('start-date');
        else if (currentCellDate.getTime() === selectedEndDate.getTime()) dayDiv.classList.add('end-date');
        else if (currentCellDate > selectedStartDate && currentCellDate < selectedEndDate) dayDiv.classList.add('in-range');
      }
    });
  };

  const updateDateRangeText = () => {
    // Function to format date as "Month 13, 2025"
    const formatDate = (date) => {
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      return date.toLocaleDateString('en-US', options);  // Format as "March 13, 2025"
    };

    if (selectedStartDate && selectedEndDate) {
      // Update the text content of the date range
      dateRangeText.textContent = `${formatDate(selectedStartDate)} to ${formatDate(selectedEndDate)}`;
    }
  };

  const hideCalendar = () => {
    showCalendar.classList.remove('show'); // Hide the calendar
  };

  prevButton.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
  });

  nextButton.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
  });

  document.addEventListener('click', (e) => {
    if (!daysContainer.contains(e.target) && !monthYear.contains(e.target)) {
      selectedStartDate = null;
      selectedEndDate = null;
      resetSelection();  // Reset selection when clicking outside the calendar
      renderCalendar(currentDate);
    }
  });

  checkinBtn.addEventListener('click', () => {
    showCalendar.classList.add('show');
  });

  document.addEventListener('click', (e) => {
    if (!showCalendar.contains(e.target) && !checkinBtn.contains(e.target)) {
      showCalendar.classList.remove('show');
    }
  });

  renderCalendar(currentDate);
});

