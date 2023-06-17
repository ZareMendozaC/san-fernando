//@ts-nocheck
import $ from "jquery";
import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "./style.scss";
// import Masonry from "masonry-layout/dist/masonry";
//@ts-ignore

$(".main-banner").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: false,
  prevArrow:
    '<div class="slick-prev size-svg"><svg width="125" height="22" viewBox="0 0 125 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.4 22L0 11L15.4 0L10.605 9.42857L124.5 9.42857V12.5714L10.605 12.5714L15.4 22Z" fill="#EAD2AA"/></svg></div>',
  nextArrow:
    '<div class="slick-next size-svg"><svg width="125" height="22" viewBox="0 0 125 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M109.1 -1.34631e-06L124.5 11L109.1 22L113.895 12.5714L8.24272e-07 12.5714L1.09903e-06 9.42856L113.895 9.42857L109.1 -1.34631e-06Z" fill="#EAD2AA"/></svg></div>',
  dots: false,
  fade: false,
  cssEase: "linear",
});



$(".btn-blog").click(function() {
  $(".menu_blog").slideToggle();
});

$(".btn-vales").click(function() {
  $(".menu_vales").slideToggle();
});

$(".btn-comprar").click(function() {
  $(".menu_compras").slideToggle();
});
