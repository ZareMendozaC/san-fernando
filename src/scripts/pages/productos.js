import $ from "jquery"
import Splide from "@splidejs/splide"


function initSplideSubCategories() {
  const root = document.querySelector('#splide-subcategories')
  if (!root) return
  const splide = new Splide(root, {
    type: 'slide',
    perPage: 5,
    perMove: 1,
    gap: '1rem',
    arrows: false,
    pagination: false,
    autoWidth: true,
    breakpoints: {
      769: {
        perPage: 1,
        perMove: 1,
        gap: '1rem',
      }
    }

  })

  splide.mount()
}

/*
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
})*/
//agregando variable al path
$(location).attr('href')
var bn_pathname = window.location.origin

$(".btn-lista-cat").on("click", function () {
  $('.col-des-menu').css('display', 'none')
  $('.col-des-menu[data-tab=' + $(this).attr('data-id') + ']').css('display', 'block')
  $('.lista-prod').css('display', 'grid')
  $('.detalle-prod').css('display', 'none')
  $(".btn-lista-cat").removeClass('active')
  $(this).addClass('active')
  let producto_html = ''
  $('.lista-prod div').remove()
  let padre = $('#catPadre').val()
  let hija = $(this).attr('data-category')

  let url_hija = hija.toLowerCase().replace(' ', '-')

  //console.log(bn_pathname,url_hija);
  var en_pathname = bn_pathname + '/categoria/'+padre+'/'+ url_hija
  history.pushState(null, "", en_pathname)

  jQuery.ajax({
    type: "post",
    dataType: "json",
    url: wpCredentials.url,
    data: { action: "get_categories", post_padre: padre, post_hija: hija },
    success: function (response) {
      if (response['success'] == true) {
        //console.log(response);
        for (var i = 0; i < response['data'].length; i++) {
          let $imgid = response['data'][i].ID
          //console.log(response['data'])
          producto_html = producto_html +
            //<a href="${response['data'][i].guid}">
            `<div data-id="${response['data'][i].id}" class="card-p select-producto-final">
                    <div class="border-card" style="background:url(${response['data'][i].bgimage})"></div>
                    <p class="color-blue">${response['data'][i].post_title}</p>
                </div>`
          //</a>
        }
        $('.lista-prod').append(producto_html)
      }
      else {
        alert("Lo sentimos no se pudieron cargar los datos, revisa tu conexión")
      }
    }
  })
})
if($( ".btn-lista-cat" ).length >0)
{
  $('#lista-cate').children(':first-child').click();
}
/*
//funcion al hacer click en los  cards de los productos carga la data
$(document).on('click','.select-producto-final', function(){ 
  $('.lista-prod').css('display','none');
  $('.detalle-prod').css('display','flex');

    let padre = $('#catPadre').val();
    let hija = $(this).attr('data-category');
    let id_product = $(this).attr('data-id');

    jQuery.ajax({
      type : "post",
      dataType : "json",
      url : wpCredentials.url,
      data : {action: "get_productofinal", post_padre : padre, id_product: id_product},
      success: function(response) {
        if(response['success'] == true) {
          $('.imgProductFinal').css("background","url("+response['data']['data'].bgimage+")");
          $('.titleProductFinal').text(response['data']['data'].post_title);
        }
        else {
            alert("Lo sentimos no se pudieron cargar los datos, revisa tu conexión");
        }
      }
    })   
} );
*/


document.addEventListener('DOMContentLoaded', function () {
  initSplideSubCategories()
})

