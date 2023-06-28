import $ from "jquery";
import Splide from "@splidejs/splide";




$('#lista-cate').slick({
  slidesToShow: 5,
  infinite: true,
  dots: false,
  arrows: false,
  variableWidth: true,
  centerMode: false,
  responsive: [
    {
      breakpoint: 769,
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

$( ".btn-lista-cat" ).on( "click", function() {
    let padre = $('#catPadre').val();
    let hija = $(this).attr('data-category');
    //console.log( wpCredentials.url);
    jQuery.ajax({
      type : "post",
      dataType : "json",
      url : wpCredentials.url,
      data : {action: "get_categories", post_padre : padre, post_hija: hija},
      success: function(response) {
        console.log(response['success']);
        if(response['success'] == true) {
            console.log(response['data']['posts']);
        }
        else {
            alert("Your vote could not be added")
        }
      }
    })   
} );