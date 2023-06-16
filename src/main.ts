//@ts-nocheck
import $ from "jquery";
import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "./style.scss";
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
//@ts-ignore
$(".slider-blog").slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: false,
  variableWith: true,
  centerMode: false,
  infinite: false,
  prevArrow:
    '<div class="slick-prev size-svg"><svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="44" y="44.5229" width="44" height="44" rx="22" transform="rotate(-180 44 44.5229)" fill="#DF0002"/><path d="M18.5997 24.6429L23.1897 29.2329C23.3771 29.4191 23.6305 29.5237 23.8947 29.5237C24.1589 29.5237 24.4123 29.4191 24.5997 29.2329C24.6934 29.1399 24.7678 29.0293 24.8186 28.9075C24.8694 28.7856 24.8955 28.6549 24.8955 28.5229C24.8955 28.3909 24.8694 28.2602 24.8186 28.1383C24.7678 28.0165 24.6934 27.9059 24.5997 27.8129L19.9997 23.2329C19.906 23.1399 19.8316 23.0293 19.7808 22.9075C19.73 22.7856 19.7039 22.6549 19.7039 22.5229C19.7039 22.3909 19.73 22.2602 19.7808 22.1383C19.8316 22.0165 19.906 21.9059 19.9997 21.8129L24.5997 17.2329C24.788 17.0459 24.8943 16.7918 24.8953 16.5264C24.8962 16.2611 24.7917 16.0062 24.6047 15.8179C24.4177 15.6296 24.1636 15.5233 23.8982 15.5223C23.6329 15.5214 23.378 15.6259 23.1897 15.8129L18.5997 20.4029C18.0379 20.9654 17.7223 21.7279 17.7223 22.5229C17.7223 23.3179 18.0379 24.0804 18.5997 24.6429Z" fill="white"/></svg></div>',
  nextArrow:
    '<div class="slick-next size-svg"><svg width="44" height="45" viewBox="0 0 44 45" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="0.522949" width="44" height="44" rx="22" fill="#DF0002"/><path d="M25.4003 20.403L20.8103 15.813C20.6229 15.6268 20.3695 15.5222 20.1053 15.5222C19.8411 15.5222 19.5877 15.6268 19.4003 15.813C19.3066 15.906 19.2322 16.0166 19.1814 16.1384C19.1306 16.2603 19.1045 16.391 19.1045 16.523C19.1045 16.655 19.1306 16.7857 19.1814 16.9076C19.2322 17.0294 19.3066 17.14 19.4003 17.233L24.0003 21.813C24.094 21.906 24.1684 22.0166 24.2192 22.1384C24.27 22.2603 24.2961 22.391 24.2961 22.523C24.2961 22.655 24.27 22.7857 24.2192 22.9076C24.1684 23.0294 24.094 23.14 24.0003 23.233L19.4003 27.813C19.212 28 19.1057 28.2541 19.1047 28.5195C19.1038 28.7848 19.2083 29.0397 19.3953 29.228C19.5823 29.4163 19.8364 29.5226 20.1018 29.5236C20.3671 29.5245 20.622 29.42 20.8103 29.233L25.4003 24.643C25.9621 24.0805 26.2777 23.318 26.2777 22.523C26.2777 21.728 25.9621 20.9655 25.4003 20.403Z" fill="white"/></svg></div>',
  dots: false,
  fade: false,
  cssEase: "linear",
});
//@ts-ignore
$(".btn-blog").click(function() {
  $(".menu_blog").slideToggle(500);
});
//@ts-ignore
$(".btn-vales").click(function() {
  $(".menu_vales").slideToggle(500);
});
//@ts-ignore
$(".btn-comprar").click(function() {
  $(".menu_compras").slideToggle(500);
});