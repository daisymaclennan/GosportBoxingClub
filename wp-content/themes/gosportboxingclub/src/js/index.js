//Gives navigation menu items an active state
const navButton = document.querySelector('.nav__button');
const nav = document.querySelector('.nav');
navButton.addEventListener('click', function(){
  nav.classList.toggle('open');
})
