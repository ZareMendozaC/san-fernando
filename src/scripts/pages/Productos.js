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
  //agregando variable al path
  $(location).attr('href');
  var bn_pathname = window.location.href;
$( ".btn-lista-cat" ).on( "click", function() {

  $( ".btn-lista-cat" ).removeClass('active');
  $(this).addClass('active');
  let producto_html= '';
  $('.lista-prod a').remove();
    let padre = $('#catPadre').val();
    let hija = $(this).attr('data-category');

    let url_hija= hija.toLowerCase().replace(' ', '-');
    
  
    var en_pathname = bn_pathname+'/'+url_hija;
    history.pushState(null, "", en_pathname);


    //console.log( wpCredentials.url);
    jQuery.ajax({
      type : "post",
      dataType : "json",
      url : wpCredentials.url,
      data : {action: "get_categories", post_padre : padre, post_hija: hija},
      success: function(response) {
        if(response['success'] == true) {
          //console.log(response);
            for(var i=0; i<response['data'].length;i++){
              let $imgid = response['data'][i].ID;
              console.log(response['data']);
              producto_html= producto_html+
              `<a href="${response['data'][i].guid}">
                <div class="card-p">
                    <div class="border-card" style="background:url(${response['data'][i].bgimage})"></div>
                    <p class="color-blue">${response['data'][i].post_title}</p>
                </div>
              </a>`
            }
            $('.lista-prod').append(producto_html);
            
        }
        else {
            alert("Your vote could not be added")
        }
      }
    })   
} );

if($( ".btn-lista-cat" ).length >0)
{
  $('#lista-cate .slick-track').children(':first-child').find('.btn-lista-cat').click();
}