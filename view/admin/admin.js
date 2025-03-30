// SIDEBAR TOGGLE START

const sidebarCont = document.querySelector('.sidebar-container');
const mainCont = document.querySelector('.main-container');
const sidebarClose = document.querySelector('.close-sidebar');
const sidebarOpen = document.querySelector('.open-sidebar');

function toggleSidebar() {
  sidebarCont.classList.toggle('hide');
  
  if (sidebarCont.classList.contains('hide')) {
    setTimeout(() => {
      sidebarOpen.classList.add('show');
      sidebarClose.classList.remove('show');
      mainCont.style.marginLeft = '0';
    }, 50);
  } else {
    setTimeout(() => {
      sidebarOpen.classList.remove('show');
      sidebarClose.classList.add('show');
      mainCont.style.marginLeft = '20%';
    }, 400);
  }
}

sidebarOpen.classList.remove('show');
sidebarClose.classList.add('show');
mainCont.style.marginLeft = '20%';

sidebarOpen.addEventListener('click', toggleSidebar);
sidebarClose.addEventListener('click', toggleSidebar);

// SIDEBAR TOGGLE END


