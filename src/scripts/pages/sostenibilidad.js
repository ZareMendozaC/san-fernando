import $ from "jquery";
import Splide from "@splidejs/splide";

if ($('.lista-logros').length > 0) {
  new Splide('.lista-logros', {
    pagination: false,
    perPage: 3.5,
    arrows: false,
    breakpoints: {
      768: {
        type: 'loop',
        perPage: 1.5,
        perMove: 1.5,
      }
    }
  }).mount();

}

if ($('.social').length > 0) {
  new Splide('.social', {
    pagination: false,
    perPage: 3.5,
    arrows: false,
    breakpoints: {
      767: {
        type: 'loop',
        perPage: 1,
        perMove: 1.5,
      }
    }
  }).mount();

}

if ($('.ambiental').length > 0) {
  new Splide('.ambiental', {
    pagination: false,
    perPage: 3.5,
    arrows: false,
    breakpoints: {
      768: {
        type: 'loop',
        perPage: 1.5,
        perMove: 2,
      }
    }
  }).mount();

}

// mobileOnlySlider(".splide", true, false, 768);

// function mobileOnlySlider($slidername, $breakpoint) {
//   var slider = $($slidername);
//   var settings = {
//     mobileFirst: true,
//     perPage: 1.5,
//     variableWidth: true,
//     centerMode: true,
//     responsive: [
//       {
//         breakpoint: $breakpoint,
//         settings: "unslick"
//       }
//     ]
//   };

//   slider.slick(settings);

//   $(window).on("resize", function () {
//     if ($(window).width() > $breakpoint) {
//       return;
//     }
//     if (!slider.hasClass("slick-initialized")) {
//       return slider.slick(settings);
//     }
//   });
// } // Mobile Only Slider
