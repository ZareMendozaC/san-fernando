import $ from "jquery";
import Splide from "@splidejs/splide";
if($('.splide.splide1').length>0){
  new Splide( '.splide.splide1' , {
    type: 'loop',
    pagination: false,
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

$(".card-certificacion").click(function(){
    let data= $(this).find('.data-certificacion').html();
    $('#dCertificacion').html(data);
    $('.modal-certificacion').fadeIn();
});
$(".close-certificacion").click(function(){
    $('#dCertificacion').html('');
    $('.modal-certificacion').fadeOut();
});
$( document ).ready(function() {
  console.log('avance');
    //$( "#tabs" ).tabs();
});