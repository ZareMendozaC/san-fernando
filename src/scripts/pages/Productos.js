import $ from "jquery";
import Splide from "@splidejs/splide";




$('#lista-cate').slick({
  slidesToShow: 4,
  infinite: true,
  dots: false,
  arrows: false,
  variableWidth: true,
  centerMode: false,
  responsive: [
    {
      breakpoint: 1024,
      settings:
      {
        slidesToShow: 1,
        slidesToShow: 1,
        infinite: true,
      }
    }
  ]
})

$('#slider-blog-list').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  variableWidth: true,
  centerMode: false,
  responsive: [
    {
      breakpoint: 1024,
      settings:
      {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
})