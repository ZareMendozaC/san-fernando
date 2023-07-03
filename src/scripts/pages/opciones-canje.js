import $ from "jquery";
import Splide from "@splidejs/splide";

$('#opciones-canje').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
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
        infinite: true,

      }
    }
  ]
})