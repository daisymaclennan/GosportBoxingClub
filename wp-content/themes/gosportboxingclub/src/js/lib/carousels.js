import Siema from 'siema'

export default function carousels(){

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

  const slideIndex = document.querySelector('.carousel__slide-index')

  function printSlideIndex() {
    slideIndex.innerHTML = this.currentSlide + 1
  }

  document.querySelector('.carousel__buttons--prev').addEventListener('click', () => carousel.prev());
  document.querySelector('.carousel__buttons--next').addEventListener('click', () => carousel.next());
}
