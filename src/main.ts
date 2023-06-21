//@ts-nocheck
import $ from "jquery";
import "slick-carousel";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "./style.scss";
import '@splidejs/splide/css';
import "./scripts/pages/inicio.js"


// import Masonry from "masonry-layout/dist/masonry";
//@ts-ignore
$(".main-banner").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    '<div class="slick-prev size-svg"><svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="44" y="44" width="44" height="44" rx="22" transform="rotate(-180 44 44)" fill="#DF0002"/><path d="M18.5997 24.1202L23.1897 28.7102C23.3771 28.8964 23.6305 29.001 23.8947 29.001C24.1589 29.001 24.4123 28.8964 24.5997 28.7102C24.6934 28.6172 24.7678 28.5066 24.8186 28.3848C24.8694 28.2629 24.8955 28.1322 24.8955 28.0002C24.8955 27.8682 24.8694 27.7375 24.8186 27.6156C24.7678 27.4937 24.6934 27.3831 24.5997 27.2902L19.9997 22.7102C19.906 22.6172 19.8316 22.5066 19.7808 22.3848C19.73 22.2629 19.7039 22.1322 19.7039 22.0002C19.7039 21.8682 19.73 21.7375 19.7808 21.6156C19.8316 21.4937 19.906 21.3831 19.9997 21.2902L24.5997 16.7102C24.788 16.5232 24.8943 16.2691 24.8953 16.0037C24.8962 15.7384 24.7917 15.4835 24.6047 15.2952C24.4177 15.1069 24.1636 15.0006 23.8982 14.9996C23.6329 14.9987 23.378 15.1032 23.1897 15.2902L18.5997 19.8802C18.0379 20.4427 17.7223 21.2052 17.7223 22.0002C17.7223 22.7952 18.0379 23.5577 18.5997 24.1202V24.1202Z" fill="white"/></svg></div>',
  nextArrow:
    '<div class="slick-next size-svg"><svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="44" height="44" rx="22" fill="#DF0002"/><path d="M25.4003 19.8798L20.8103 15.2898C20.6229 15.1036 20.3695 14.999 20.1053 14.999C19.8411 14.999 19.5877 15.1036 19.4003 15.2898C19.3066 15.3828 19.2322 15.4934 19.1814 15.6152C19.1306 15.7371 19.1045 15.8678 19.1045 15.9998C19.1045 16.1318 19.1306 16.2625 19.1814 16.3844C19.2322 16.5063 19.3066 16.6169 19.4003 16.7098L24.0003 21.2898C24.094 21.3828 24.1684 21.4934 24.2192 21.6152C24.27 21.7371 24.2961 21.8678 24.2961 21.9998C24.2961 22.1318 24.27 22.2625 24.2192 22.3844C24.1684 22.5063 24.094 22.6169 24.0003 22.7098L19.4003 27.2898C19.212 27.4768 19.1057 27.7309 19.1047 27.9963C19.1038 28.2616 19.2083 28.5165 19.3953 28.7048C19.5823 28.8931 19.8364 28.9994 20.1018 29.0004C20.3671 29.0013 20.622 28.8968 20.8103 28.7098L25.4003 24.1198C25.9621 23.5573 26.2777 22.7948 26.2777 21.9998C26.2777 21.2048 25.9621 20.4423 25.4003 19.8798V19.8798Z" fill="white"/></svg></div>',
  dots: true,
  fade: false,
  cssEase: "linear",
});
//@ts-ignore
/*
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
  responsive: [
    {
      breakpoint: 767,
      settings: {
        variableWidth: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ]
});
*/
//@ts-ignore
$(".btn-blog").click(function () {
  $(".menu_blog").slideToggle();
  $(".btn-blog .arrow").toggleClass("arrow-btn-active")
});
//@ts-ignore
$(".btn-vales").click(function () {
  $(".menu_vales").slideToggle();
});
//@ts-ignore
$(".btn-comprar").click(function () {
  $(".menu_compras").slideToggle();
});
//@ts-ignore
$(".toggle-menu").click(function () {
  $(".menu_mobile").slideToggle();
});
//@ts-ignore
$(".btn-blog-mov").click(function () {
  $(".blog_mov").slideToggle();
});
//@ts-ignore
$(".btn-vales-mov").click(function () {
  $(".vales_mov").slideToggle();
});
//@ts-ignore
$(".btn-comprar-mov").click(function () {
  $(".compras_mov").slideToggle();
});
//@ts-ignore
$(".btn-blog-mov").click(function() {
  $(".li-blog_mov").slideToggle();
  $(".btn-blog-mov .arrow").toggleClass("arrow-btn-active")
});
//@ts-ignore
$(".btn-vales-mov").click(function() {
  $(".li-vales_mov").slideToggle();
  $(".btn-vales-mov .arrow").toggleClass("arrow-btn-active")
});
//@ts-ignore
$(".btn-comprar-mov").click(function() {
  $(".li-compras_mov").slideToggle();
  $(".btn-comprar-mov .arrow").toggleClass("arrow-btn-active")
});
//@ts-ignore
$(".footer-menu").click(function () {
  $("#list-opcion1").toggleClass("list-menu");
  $("#list-opcion1").toggleClass("list-menu-on");
})
//@ts-ignore
$(".products-footer").click(function () {
  $("#list-opcion2").toggleClass("list-menu-2");
  $("#list-opcion2").toggleClass("list-menu-2_on");
})
//@ts-ignore
$(".products-vale").click(function () {
  $("#list-opcion3").toggleClass("list-menu-3");
  $("#list-opcion3").toggleClass("list-menu-3_on");
})
//@ts-ignore
var mediaqueryList = window.matchMedia("(max-width: 768px)");

// mediaqueryList.addListener(function (EventoMediaQueryList) {
//   $(".section-2").css("display", "none");
// });

