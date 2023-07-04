import $ from "jquery";
import Splide from "@splidejs/splide";
/*
$('#opciones-canje').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  variableWidth: true,
  infinite: true,
  centerMode: false,
  responsive: [
    {
      breakpoint: 769,
      settings:
      {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        centerMode: true,
        variableWidth: true,

      }
    }
  ]
})
*/
function initSplideCanje() {
  const root = document.querySelector('#opciones-canje')
  if (!root) return
  const splide = new Splide(root, {
    type: 'slide',
    perPage: 2,
    perMove: 1,
    gap: '1rem',
    arrows: false,
    pagination: false,
    autoWidth: true,
    breakpoints: {
      769: {
        perPage: 1,
        perMove: 1,
      }
    }

  })

  splide.mount()
}
initSplideCanje();