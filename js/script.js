const navMenu = document.querySelector('.nav-menu');
const navToggle = document.querySelector('.toggle-menu');
const navClose = document.querySelector('.nav-close');

navToggle.addEventListener('click', () => {
  navMenu.classList.add('show-menu');
})