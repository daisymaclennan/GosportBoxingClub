import Siema from 'siema'

const slideIndex = document.querySelector('.carousel__slide-index')

const carousel = new Siema({
    selector: '.carousel',
    duration: 200,
    easing: 'ease-out',
    perPage: {
      800: 2,
      1500: 3,
    },
    startIndex: 0,
    draggable: true,
    multipleDrag: true,
    threshold: 20,
    loop: true,
    rtl: false,
    onInit: () => {},
    onChange: printSlideIndex,
});

function printSlideIndex() {
  document.querySelector('.carousel__slide-index').innerHTML = this.currentSlide + 1
}

document.querySelector('.carousel__buttons--prev').addEventListener('click', () => carousel.prev());
document.querySelector('.carousel__buttons--next').addEventListener('click', () => carousel.next());

//Gives navigation menu items an active state
const navButton = document.querySelector('.nav__button');
const nav = document.querySelector('.nav');
navButton.addEventListener('click', function(){
  nav.classList.toggle('open');
})
