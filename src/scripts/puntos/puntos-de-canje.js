    let lista;
    let resultado;
    let origin   = window.location.origin; 
    let navegador;
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    function detectBrowser() { 
        if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 ) {
            return 'Opera';
        } else if(navigator.userAgent.indexOf("Chrome") != -1 ) {
            return 'Chrome';
        } else if(navigator.userAgent.indexOf("Safari") != -1) {
            return 'Safari';
        } else if(navigator.userAgent.indexOf("Firefox") != -1 ){
            return 'Firefox';
        } else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) {
            return 'IE';//crap
        } else {
            return 'Unknown';
        }
    } 
    $(document).ready(function () {
        if( $(window).width() < 768){
            $(document).on('click', '.card', function () {
                let indice = $(this).attr('data-id');    
                    let info = lista.filter(obj => {
                        return obj.id === parseInt(indice);
                    });
                $('.content-info-card').css('display','block');
                $('.content-info-card').addClass('animate__animated animate__fadeInRight');
                $('.scroll-r').addClass('pos-abs');
                $('.card').css('background','transparent');
                $(this).css('background','#F9F9F9');
                $('.t__1').html($(this).find('.title-card').html());
                $('.list-results').css('display','none');
                $('.list-results').addClass('animate__animated  animate__fadeOut');
                $('html, body').animate({scrollTop:0}, 'slow');
               
                $('.chng_name').html(info[0].ubicacion+ ' - '+info[0].tipo);
                $('.chng_address').html('<strong>Dirección:</strong> '+info[0].direccion);
                if(info[0].telefono==null){
                    $('.chng_phone').css('display','none');
                }else{
                    $('.chng_phone').css('display','block');
                    $('.chng_phone').html('<strong>Teléfono:</strong> '+info[0].telefono);
                }
                
                $('.chng_hr').html('<strong>Horario de atención:</strong> '+info[0].horario);
                $('.chng_res').html('<strong>Restricciones:</strong> '+info[0].restricciones);
                $('.chng_fototienda').attr('src',info[0].urlfoto);
                $('.chng_names').html('<strong>'+info[0].nombre+'</strong>');
                if(info[0].url_tienda_jpg || info[0].url_tienda_webp){
                        if(detectBrowser()=='Safari'){
                            $('.chng_fototienda').attr('src',info[0].url_tienda_jpg);
                            $('.chng_fototienda').css('display','block');
                        }
                        else{
                            $('.chng_fototienda').attr('src',info[0].url_tienda_webp);
                            $('.chng_fototienda').css('display','block');
                        }
                }
                else
                {
                 $('.chng_fototienda').css('display','none');
                }
                
                let latitud=info[0].latitud;
                let longitud=info[0].longitud;
                
                if(info[0].urlmapa)
                {
                    $('.chng_mapa').attr('src',info[0].urlmapa);
                    $('.chng_waze').attr('href','https://www.waze.com/livemap?ll='+latitud+','+longitud+'&navigate=yes');
                    $('.chng_google').attr('href','https://www.google.com/maps/search/?api=1&query='+latitud+','+longitud);
                    $('.chng_compartir').attr('href','https://api.whatsapp.com/send?text=https://www.san-fernando.com.pe/puntosdecanje?id='+info[0].id_seguimiento);
                    $('.content-btn-sup').css('display','flex');
                    $('.txt-info-card').css('display','block');
                }else{
                    $('.content-btn-sup').css('display','none');
                    $('.txt-info-card').css('display','none');
                }
                setTimeout(function(){ 
                let tam= $('.content-info-card').height()+500;
                $('.content-movil').css('height',tam+'px');
                }, 500);
        });  
        }else{
            
            $(document).on('click', '.card', function () {
                $('.content-info-card').removeClass('animate__animated animate__fadeIn');
                    let indice = $(this).attr('data-id');    
                    let info = lista.filter(obj => {
                        return obj.id === parseInt(indice);
                    });
                    console.log(info);
                $('.img-banner').hide();
                $('.content-info-card').css('display','block');
                $('.content-info-card').addClass('animate__animated animate__fadeIn');
                $('.card').css('background','transparent');
                $(this).css('background','#F9F9F9');
                
                $('.chng_name').html(info[0].ubicacion+ ' - '+info[0].tipo);
                $('.chng_address').html('<strong>Dirección:</strong> '+info[0].direccion);
                if(info[0].telefono==null){
                    $('.chng_phone').css('display','none');
                }else{
                    $('.chng_phone').css('display','block');
                    $('.chng_phone').html('<strong>Teléfono:</strong> '+info[0].telefono);
                }
                
                $('.chng_hr').html('<strong>Horario de atención:</strong> '+info[0].horario);
                $('.chng_res').html('<strong>Restricciones:</strong> '+info[0].restricciones);
                $('.chng_fototienda').attr('src',origin+info[0].urlfoto);
                $('.chng_names').html('<strong>'+info[0].nombre+'</strong>');
                if(info[0].url_tienda_jpg || info[0].url_tienda_webp){
                        if(detectBrowser()=='Safari'){
                            $('.chng_fototienda').attr('src',info[0].url_tienda_jpg);
                            $('.chng_fototienda').css('display','block');
                        }
                        else{
                            $('.chng_fototienda').attr('src',info[0].url_tienda_webp);
                            $('.chng_fototienda').css('display','block');
                        }
                }
                else
                {
                 $('.chng_fototienda').css('display','none');
                }
                let latitud=info[0].latitud;
                let longitud=info[0].longitud;
                 if(info[0].urlmapa)
                    {
                        $('.chng_mapa').attr('src',info[0].urlmapa);
                        $('.chng_waze').attr('href','https://www.waze.com/livemap?ll='+latitud+','+longitud+'&navigate=yes');
                        $('.chng_google').attr('href','https://www.google.com/maps/search/?api=1&query='+latitud+','+longitud);
                        //chng_compartir ?categoria=pollo
                        $('.chng_compartir').attr('href','https://api.whatsapp.com/send?text=https://www.san-fernando.com.pe/puntosdecanje?id='+info[0].id_seguimiento);
                        $('.content-btn-sup').css('display','flex');
                        $('.txt-info-card').css('display','block');
                        $('.chng_mapa').css('display','block');
                    }else{
                        $('.content-btn-sup').css('display','none');
                        $('.txt-info-card').css('display','none');
                        $('.chng_mapa').css('display','none');
                    }
        });
        }
        
        let id= getUrlParameter('id');
        let url = origin+"/js/puntos_canje.js";
        let tipo_venta_canje = $('#tipoEncuentranos').val();
        const formdata = new FormData()
        formdata.append("nonce", wpCredentials.security)
        formdata.append("action", "sales_points")
        formdata.append("type", tipo_venta_canje)

        fetch(wpCredentials.url, {
            method: 'POST',
            body: formdata,
        })
            .then(d => d.json())
            .then(d => {
                lista = d.data;
                resultado = d.data;
            console.log(d.data);
                if(id){
                        resultado = lista.filter(objeto => objeto.id_seguimiento === id);
                        paint_lista(resultado);
                }
                else{
                        paint_lista(lista);
                }
            }).catch((err) => console.error(err));
    });
    function resetFilter(){
        $(".selProducto").val("0");
        $(".selTipoVale").val("0");
        $('.selCiudad').val('').trigger('change');
        resultado= lista;
        paint_lista(lista);
    }
    function selectCard(){
        if( $(window).width() > 768){
            if($('.list-results').children().length>0){
                $('.list-results').children().first().click();
            }  
        }
    
    }
    function paint_lista(listado){
    let iconos;
    let vale;
    //	console.log(listado);
        $('.list-results').empty();  
            listado.forEach(function (elemento) {
            iconos='';
            vale='';
            
            
            if(elemento.producto==='1'){
                iconos ='<span><img src="'+origin+'/wp-content/uploads/2023/06/pavo-1-1.png" width="18px" height="16px" alt=""><span>Pavo</span></span>'; 
              
            }
            else if(elemento.producto=='1,2'){
                iconos ='<span><img src="'+origin+'/wp-content/uploads/2023/06/pavo-1-1.png" width="18px" height="16px" alt=""><span>Pavo</span></span> <span><img src="images/puntoscanje/image110.png" width="18px" height="16px" alt=""> <span>Cerdo</span></span>'; 
               
            }
            else if(elemento.producto=='1,3'){
                iconos ='<span><img src="'+origin+'/wp-content/uploads/2023/06/pavo-1-1.png" width="18px" height="16px" alt=""><span>Pavo</span></span> <span><img src="'+origin+'/wp-content/uploads/2023/06/carne-1-1.png" width="18px" height="16px" alt=""> <span>Pavo trozado</span></span>'; 
               
            }
            else if(elemento.producto=='2,3'){
                iconos ='<span><img src="images/puntoscanje/image110.png" width="18px" height="16px" alt=""></span> <span>Cerdo</span> <span><img src="'+origin+'/wp-content/uploads/2023/06/carne-1-1.png" width="18px" height="16px" alt=""> <span>Pavo trozado</span></span>'; 
               
            }
            else if(elemento.producto=='1,2,3'){
                iconos ='<span><img src="'+origin+'/wp-content/uploads/2023/06/pavo-1-1.png" width="18px" height="16px" alt=""><span>Pavo</span></span><span><img src="images/puntoscanje/image110.png" width="18px" height="16px" alt=""></span> <span>Cerdo</span> <span><img src="'+origin+'/wp-content/uploads/2023/06/carne-1-1.png" width="18px" height="16px" alt=""> <span>Pavo trozado</span></span>'; 
               
            }
            else if(elemento.producto==='3'){
                iconos ='<span><img src="'+origin+'/wp-content/uploads/2023/06/carne-1-1.png" width="18px" height="16px" alt=""> <span>Pavo trozado</span></span>'; 
            }
            /*
            else if(elemento.producto==='1' && elemento.producto==='2'){
                iconos =iconos+'<span><img src="'+origin+'/sanfer/wp-content/uploads/2023/06/pavo-1-1.png" width="18px" height="16px" alt=""> <span>Pavo</span></span><span><img src="images/puntoscanje/image110.png" width="18px" height="16px" alt=""><span>Cerdo</span></span>'; 
            }
            else if(elemento.producto==='1' && elemento.producto==='3'){
                iconos =iconos+'<span><img src="'+origin+'/sanfer/wp-content/uploads/2023/06/pavo-1-1.png" width="18px" height="16px" alt=""> <span>Pavo</span></span><span><img src="'+origin+'/sanfer/wp-content/uploads/2023/06/carne-1-1.png" width="18px" height="16px" alt=""><span>Pavo trozado</span></span>'; 
            }
            else if(elemento.producto==='2' && elemento.producto==='3'){
                iconos =iconos+ '<span><img src="images/puntoscanje/image110.png" width="18px" height="16px" alt=""> <span>Cerdo</span></span><span><img src="'+origin+'/sanfer/wp-content/uploads/2023/06/carne-1-1.png" width="18px" height="16px" alt=""><span>Pavo trozado</span></span>'; 
            }
            else{
                iconos ='<span><img src="'+origin+'/sanfer/wp-content/uploads/2023/06/pavo-1-1.png" width="18px" height="16px" alt=""> <span>Pavo</span></span><span><img src="images/puntoscanje/image110.png" width="18px" height="16px" alt=""> <span>Cerdo</span></span><span><img src="'+origin+'/sanfer/wp-content/uploads/2023/06/carne-1-1.png" width="18px" height="16px" alt=""><span>Pavo trozado</span></span>'; 
            }
            */
            
            if(elemento.tipovale_dos=='digital'){
                vale= '<span><img src="'+origin+'/wp-content/uploads/2023/06/interactivo-1.png" width="15px" height="15px" alt="">    Vale digital</span>';
            }else{
                vale='';
            }
            
            let figure = '<div class="card" data-id='+elemento.id+'><div class="data-layer-up" id="'+elemento.id_seguimiento+'"> </div> <div class="data-layer"><p class="txt-info">Más info</p><p class="title-card">'+elemento.ubicacion+' - '+elemento.tipo+'</p><p>'+elemento.direccion+'</p><span class="content-horario"><p>'+elemento.horario+'</p></span><div class="row-icons"><div class="icon-product">'+iconos+'</div><div class="icon-vale">'+vale+'<span><img src="'+origin+'/wp-content/uploads/2023/06/tarjeta-de-regalo-1.png" width="15px" height="15px" alt="">    Vale físico</span></div></div></div></div>';
            $('.list-results').append(figure);
            $('.card').fadeIn();
            
            
        });
        let conteo= $('.list-results').children().length;
        if(conteo==0){
             $('.text-result').html('No se encontraron resultados, por favor intente otra vez.');
        }
        else{
             $('.text-result').html('<strong>Resultados:</strong> '+conteo+' punto(s) de canje.');
        }
           
    }
    
    $(".selCiudad").on('change', function (e) {
        if($('.selProducto').val()===null && $('.selTipovale').val()===null ){
            let searchValue = $(this).val();
              resultado = lista.filter(objeto => objeto.ubicacion === searchValue);
              paint_lista(resultado);
              selectCard();
        }
        else if($('.selProducto').val() === null){
            let ubicacion =  $(this).val();
            let tipo =  $(".selTipovale").val();
            //1. filtro por ubicacion
            //2. filtro por vale
            resultado =  lista.filter(function(objeto){
                return objeto.ubicacion == ubicacion && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
            });
            paint_lista(resultado);
            selectCard();
        }
        else if($('.selTipovale').val() === null){
            let ubicacion =   $(this).val();
            let producto = String($(".selProducto").val());
            let buscar;
            //1. filtro por ubicacion
            //2. filtro por producto
            
            if(producto==='1,2'){
                resultado =  lista.filter(function(objeto){
                    return objeto.ubicacion == ubicacion && (objeto.producto == producto);
                });
            }
            else{
                resultado =  lista.filter(function(objeto){
                     buscar= objeto.producto.split(",");
                    return objeto.ubicacion == ubicacion && (buscar[0] == producto || buscar[1] == producto || buscar[2] == producto);
                });
            }
    
            paint_lista(resultado);
            selectCard();
        }
        else{
            let producto = String($(".selProducto").val());
            let ubicacion =  $(this).val();
            let tipo = $(".selTipovale").val();
            let buscar;
            //1. filtro por producto
            //2. filtro por ubicacion
            //3. filtro por tipo vale
             if(producto==='1,2'){
                 resultado =  lista.filter(function(objeto){
                    return (objeto.producto == producto)  && (objeto.ubicacion == ubicacion) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });
             }
             else{
               resultado =  lista.filter(function(objeto){
                    buscar= objeto.producto.split(",");
                    return (buscar[0] == producto || buscar[1] == producto || buscar[2] == producto)  && (objeto.ubicacion == ubicacion) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });  
             }
            paint_lista(resultado);
            selectCard();
        }
    });
    $(".selProducto").on('change', function (e) {
        if($('.selCiudad').val()===null && $('.selTipovale').val()===null ){
            let searchValue = String($(this).val());
            let buscar;
              if(searchValue==='1,2'){
                  resultado = lista.filter(objeto => objeto.producto === searchValue);
              }else{
                  resultado =  lista.filter(function(objeto){
                  buscar= objeto.producto.split(",");
                    return buscar[0]== searchValue || buscar[1]== searchValue || buscar[2]== searchValue;
                });
              }
              paint_lista(resultado);
              selectCard();
              
              
        }
        else if($('.selCiudad').val() === null){
            let producto=  String($(this).val());
            let tipo= $(".selTipovale").val();
            let buscar;
            //1. filtro por producto
            //2. filtro por vale
            
            if(producto==='1,2'){
                   resultado =  lista.filter(function(objeto){
                    return (objeto.producto == producto ) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });
              }else{
                   resultado =  lista.filter(function(objeto){
                   buscar= objeto.producto.split(",");
                    return (buscar[0] == producto || buscar[1] == producto || buscar[2] == producto) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });
              }
              
            paint_lista(resultado);
            selectCard();
        }
        else if($('.selTipovale').val() === null){
            let ubicacion = $(".selCiudad").val();
            let producto = String($(this).val());
            let buscar;
            //1. filtro por ubicacion
            //2. filtro por producto
            // resultado =  lista.filter(function(objeto){
            //     return objeto.ubicacion == ubicacion && (objeto.producto_pavo == producto || objeto.producto_cerdo == producto) ;
            // });
             if(producto==='1,2'){
                resultado =  lista.filter(function(objeto){
                    return objeto.ubicacion == ubicacion && objeto.producto == producto ;
                }); 
             }else{
                resultado =  lista.filter(function(objeto){
                     buscar= objeto.producto.split(",");
                    return objeto.ubicacion == ubicacion && (buscar[0] == producto || buscar[1] == producto || buscar[2] == producto) ;
                });
             }
            
            paint_lista(resultado);
            selectCard();
        }
        else{
            let producto = String($(this).val());
            let ubicacion =  $(".selCiudad").val();
            let tipo = $(".selTipovale").val();
            let buscar;
            //1. filtro por producto
            //2. filtro por ubicacion
            //3. filtro por tipo vale
            
             if(producto==='1,2'){
                 resultado =  lista.filter(function(objeto){
                    return (objeto.producto == producto)  && (objeto.ubicacion == ubicacion) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });
             }
             else{
               resultado =  lista.filter(function(objeto){
                    buscar= objeto.producto.split(",");
                    return (buscar[0] == producto || buscar[1] == producto || buscar[2] == producto)  && (objeto.ubicacion == ubicacion) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });  
             }
            
            paint_lista(resultado);
            selectCard();
        }
    });
    
    $(".selTipovale").on('change', function (e) {
        if($('.selProducto').val()===null && $('.selCiudad').val()===null ){
            let searchValue = $(this).val();
            //resultado = lista.filter(name => name.tipovale === searchValue);
            resultado =  lista.filter(function(objeto){
                return objeto.tipovale_uno == searchValue || objeto.tipovale_dos == searchValue;
            });
            paint_lista(resultado);
            selectCard();
        }
        else if($('.selProducto').val() === null){
            let ubicacion = $(".selCiudad").val();
            let tipo = $(this).val();
            //1. filtro por ubicacion
            //2. filtro por tipo de vale
            resultado =  lista.filter(function(objeto){
                return objeto.ubicacion == ubicacion && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
            });
            paint_lista(resultado);
            selectCard();
        }
        else if($('.selCiudad').val() === null){
            let producto = String($(".selProducto").val());
            let tipo = $(this).val();
            let buscar;
            //1. filtro por producto
            //2. filtro por tipo de vale
               if(producto==='1,2'){
                resultado =  lista.filter(function(objeto){
                    return (objeto.producto == producto)  && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });
               }
               else{
                resultado =  lista.filter(function(objeto){
                     buscar= objeto.producto.split(",");
                    return (buscar[0] == producto || buscar[1] == producto || buscar[2] == producto)  && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });
               }
            paint_lista(resultado);
            selectCard();
        }
        else{
            let producto = String($(".selProducto").val());
            let ubicacion = $(".selCiudad").val();
            let tipo = $(this).val();
            let buscar;
            //1. filtro por producto
            //2. filtro por ubicacion
            //3. filtro por tipo vale
            if(producto==='1,2'){
                 resultado =  lista.filter(function(objeto){
                    return (objeto.producto == producto)  && (objeto.ubicacion == ubicacion) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });
             }
             else{
               resultado =  lista.filter(function(objeto){
                   buscar= objeto.producto.split(",");
                    return (buscar[0] == producto || buscar[1] == producto || buscar[2] == producto)  && (objeto.ubicacion == ubicacion) && (objeto.tipovale_uno == tipo || objeto.tipovale_dos == tipo);
                });  
            }
            paint_lista(resultado);
            selectCard();
        }
    });
    
    
    
     $(document).on('click', '#clear', function () {
        resetFilter();
        //$('.selCiudad').val(null).trigger('change');
        selectCard();
    });
    
// $('.selCiudad').select2({
//     placeholder: "Ubicación",
//     allowClear: true
//   });







