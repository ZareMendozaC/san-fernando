import $ from "jquery";
import Splide from "@splidejs/splide";
new Splide( '.splide.splide1' , {
    type: 'loop',
    pagination: false,
}).mount();
/*
new Splide( '.splide.splide2' , {
    pagination: false,
    arrows: false,
    perPage: 7,
    type: 'loop',
    breakpoints: {
        768: {
          perPage: 1,
          arrows: true,
          pagination: true,
          perMove: 1,
        },
      },
}).mount();
*/
mobileOnlySlider(".lista-productos", true, false, 767);

function mobileOnlySlider($slidername, $dots, $arrows, $breakpoint) {
  var slider = $($slidername);
  var settings = {
    mobileFirst: true,
    dots: $dots,
    arrows: $arrows,
    variableWidth: true,
    centerMode: true,
    responsive: [
      {
        breakpoint: $breakpoint,
        settings: "unslick"
      }
    ]
  };

  slider.slick(settings);

  $(window).on("resize", function () {
    if ($(window).width() > $breakpoint) {
      return;
    }
    if (!slider.hasClass("slick-initialized")) {
      return slider.slick(settings);
    }
  });
} // Mobile Only Slider