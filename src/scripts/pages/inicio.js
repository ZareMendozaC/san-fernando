import $ from "jquery";
import Splide from "@splidejs/splide";
if ($('.splide.splide1').length > 0) {
  new Splide('.splide.splide1', {
    type: 'slide',
    pagination: false,
    autoplay: true,
  }).mount();

}

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

$(".card-certificacion").click(function () {
  let data = $(this).find('.data-certificacion').html();
  $('#dCertificacion').html(data);
  $('.modal-certificacion').fadeIn();
});
$(".close-certificacion").click(function () {
  $('#dCertificacion').html('');
  $('.modal-certificacion').fadeOut();
});
$(document).ready(function () {
  $(".close-des").on("click", function () {
    if ($(this).hasClass('open-des')) {
      $(this).parent().parent().find('.select-options').slideUp();
      $(this).css('transform', 'rotate(180deg)')
      $(this).removeClass('open-des');
    } else {
      $(this).parent().parent().find('.select-options').slideDown();
      $(this).css('transform', 'rotate(0deg)')
      $(this).addClass('open-des');
    }
  });
});
jQuery(".modal-close").click(function() {
   
  jQuery('#video_modal_0 iframe').each(function(index) {
  
    jQuery(this).attr('src', jQuery(this).attr('src'));
 
      return false;
 
    });
 
  });
