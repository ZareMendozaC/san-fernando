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
        perMove: 2,
      }
    }
  }).mount();

}

mobileOnlySlider2(".list-social-1", false, false, 768);

function mobileOnlySlider2($slidername, $dots, $arrows, $breakpoint) {
  var slider = $($slidername);
  var settings = {
    mobileFirst: true,
    dots: $dots,
    arrows: $arrows,
    variableWidth: true,
    centerMode: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
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


mobileOnlySlider3(".list-ambiental-1", false, false, 768);

function mobileOnlySlider3($slidername, $dots, $arrows, $breakpoint) {
  var slider = $($slidername);
  var settings = {
    mobileFirst: true,
    dots: $dots,
    arrows: $arrows,
    variableWidth: true,
    centerMode: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
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



