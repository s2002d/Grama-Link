//show/hide nav menu

const menu = document.querySelector('.nav__menu');
const menuBtn = document.querySelector('.open-menu-button');
const closeBtn = document.querySelector('.close-menu-button');


menuBtn.addEventListener('click', () => {
  menu.style.display = 'flex';
  closeBtn.style.display = 'inline-block';
  menuBtn.style.display = 'none';
});

const closeNav = () => {
    menu.style.display = 'none';
    closeBtn.style.display = 'none';
    menuBtn.style.display = 'inline-block';
}

closeBtn.addEventListener('click', closeNav);


//show/hide profile menu

const userPic = document.querySelector('.user-pic');
const subMenu = document.querySelector('.sub-menu');
userPic.addEventListener('click', () => {
  subMenu.style.display = subMenu.style.display === 'flex' ? 'none' : 'flex';
});

