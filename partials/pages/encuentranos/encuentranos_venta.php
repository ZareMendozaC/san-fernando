<section class="section-encuentranos">
    <div class="trabaja-head d-flex">
        <h1 class="color-white">Encuentra productos San Fernando</h1>
        <p class="text-center color-white p-subtitle">Escoge los puntos de venta o canje habilitados más cerca de ti</p>
    </div>
    <div class="row row-mrg content-movil">
        <div class="col-md-5 col-xs-12 no-pdt">
            <div class="row-mrg-left">
                <p class="color-blue title">Elige tu ubicación y tipo de vale</p>
                <p class="subtitle">Recuerda revisar las restricciones en el punto de canje seleccionado.</p>
                <div class="select-tipo">
                    <input id="tipoEncuentranos" type="hidden" name="" value="venta">
                    <a href="<?php echo home_url(); ?>/puntos-de-canje">
                        <div class="btn-tipo">Puntos de canje</div>
                    </a>
                    <div class="btn-tipo active">Puntos de venta</div>
                </div>
                <div class="content-select">
                    <div class="box-select">
                        <!-- <label class="pos-lbl_1" for="ciudad">Ubicación</label>-->
                        <select name="ciudad" class="input-control selCiudad">
                            <option selected disabled>Ubicación</option>
                            <optgroup label="Distritos Lima">
                                <option value="Ate/Salamanca">Ate/Salamanca</option>
                                <option value="Breña">Breña</option>
                                <option value="Callao">Callao</option>
                                <option value="Carabayllo">Carabayllo</option>
                                <option value="Chorrillos">Chorrillos</option>
                                <option value="Comas">Comas</option>
                                <option value="La Victoria">La Victoria</option>
                                <option value="Lima">Lima</option>
                                <option value="Lince">Lince</option>
                                <option value="Los Olivos">Los Olivos</option>
                                <option value="Pueblo Libre">Pueblo Libre</option>
                                <option value="San Martin de Porres">San Martin de Porres</option>
                                <option value="San Miguel">San Miguel</option>
                                <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                                <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                                <option value="Surco">Surco</option>
                                <option value="Surquillo">Surquillo</option>
                                <option value="Villa el Salvador">Villa el Salvador</option>
                            </optgroup>
                            <optgroup label="Provincia">
                                <option value="Abancay">Abancay</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Cajamarca">Cajamarca</option>
                                <option value="Cañete">Cañete</option>
                                <option value="Chanchamayo">Chanchamayo</option>
                                <option value="Chiclayo">Chiclayo</option>
                                <option value="Chimbote (Santa)">Chimbote (Santa)</option>
                                <option value="Chincha">Chincha</option>
                                <option value="Cusco">Cusco</option>
                                <option value="Huamanga">Huamanga</option>
                                <option value="Huancayo">Huancayo</option>
                                <option value="Huanuco">Huanuco</option>
                                <option value="Huaraz">Huaraz</option>
                                <option value="Huaura">Huaura</option>
                                <option value="Ica">Ica</option>
                                <option value="Ilo">Ilo</option>
                                <option value="Iquitos (Maynas)">Iquitos (Maynas)</option>
                                <option value="Jaen">Jaen</option>
                                <option value="Juliaca (San Román)">Juliaca (San Román)</option>
                                <option value="Tingo María (Leoncio Prado)">Tingo María (Leoncio Prado)</option>
                                <option value="Pasco">Pasco</option>
                                <option value="Piura">Piura</option>
                                <option value="Pucallpa (Coronel Portillo)">Pucallpa (Coronel Portillo)</option>
                                <option value="Puerto Maldonado (Tambopata)">Puerto Maldonado (Tambopata)</option>
                                <option value="Puno">Puno</option>
                                <option value="Tacna">Tacna</option>
                                <option value="Talara">Talara</option>
                                <option value="Tarapoto (San Martín)">Tarapoto (San Martín)</option>
                                <option value="Trujillo">Trujillo</option>
                                <option value="Tumbes">Tumbes</option>
                            </optgroup>
                        </select>
                    </div>
                    <select name="producto" class="input-control selProducto">
                        <option value="0" selected disabled>Productos</option>
                        <option value="1">Pavo entero</option>
                        <!-- <option value="3">Pavo trozado</option>
                        <option value="2">Cerdo</option> -->
                        <!-- <option value="1,2">Pavo o Cerdo</option>-->
                    </select>
                    <select name="tipovale" class="input-control selTipovale">
                        <option value="0" selected disabled>Tipo de vale</option>
                        <option value="fisico">Vale Físico </option>
                        <option value="digital">Vale Digital</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-8">
                        <p class="text-result">Mostrando 52 puntos de canje en Lima y provincias</p>
                    </div>
                    <div class="col-md-6 col-xs-4">
                        <p id="clear"><u>Limpiar</u></p>
                    </div>
                </div>
            </div>

            <div class="list-results">
            </div>

        </div>
        <div class="col-md-7 col-xs-12 no-pdt scroll-r">
            <img class="img-banner" src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/mapa.png" width="100%" height="100%" alt="mapa puntos canje">
            <div class="content-info-card info-card" style="display: none;">
                <p class="close-card show-res">Volver</p>

                <p class="title-card-2 t__1 chng_name blue">Breña: Tienda de Juan Lopez</p>
                <!--<p class="txt-info-card chng_names"></p>-->
                <img class="chng_fototienda" src="images/puntoscanje/tienda.webp" width="100%" height="" alt="tienda puntos canje">

                <p class="txt-info-card space-20 chng_address"><strong>Dirección:</strong></p>
                <p class="txt-info-card chng_phone"> </p>
                <p class="txt-info-card chng_hr"><strong>Horario de atención:</strong> Lunes a Viernes de 8:00 am a 12:00 pm y de 3:00 pm a 6:00 pm</p>
                <p class="txt-info-card chng_res"><strong>Restricciones:</strong> Se atiende vale físico por pavo, vale físico por cerdo y vale digital por pavo, cerdo y enrollado. Disponibilidad sujeta a stock</p>
                <br>
                <p class="txt-info-card"><strong>Cómo llegar</strong></p>
                <div class="content-btn-sup">
                    <div class="content-btn show-desk">
                        <a class="chng_google" target="_blank" href="https://www.google.com/maps/place/12%C2%B006'30.5%22S+77%C2%B001'02.6%22W/@-12.10845[…]ta=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.1084611!4d-77.0173778">Abrir en Google Maps</a>
                        <a class="chng_waze" target="_blank" href="https://www.waze.com/livemap?ll=-12.10846,-77.01737&navigate=yes">Abrir en Waze</a>
                        <a class="chng_compartir" href="https://api.whatsapp.com/send?text=https://www.san-fernando.com.pe/puntosdecanje?id=1" data-action="share/whatsapp/share" target="_blank">Compartir</a>
                    </div>
                </div>
                <img class="chng_mapa" src="images/puntoscanje/ubicacion.webp" width="100%" height="100%" alt="ubicacion puntos canje">
                <div class="content-btn show-res">
                    <a class="chng_google" target="_blank" href="https://www.google.com/maps/place/12%C2%B006'30.5%22S+77%C2%B001'02.6%22W/@-12.10845[…]ta=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.1084611!4d-77.0173778">Abrir en Google Maps</a>
                    <a class="chng_waze" target="_blank" href="https://www.waze.com/livemap?ll=-12.10846,-77.01737&navigate=yes">Abrir en Waze</a>
                    <a class="chng_compartir" href="https://api.whatsapp.com/send?text=https://www.san-fernando.com.pe/puntosdecanje?id=1" data-action="share/whatsapp/share" target="_blank">Compartir</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$( document ).ready(function() {
    /*
    $('.selCiudad').select2({
      placeholder: "Ubicación",
      allowClear: true
    });
    */
    $(document).on('click', '.close-card', function () {
        $('.content-info-card').css('display','none');
        $('.content-info-card').removeClass('animate__animated animate__fadeInRight');
        $('.list-results').css('display','block');
        $('.content-movil').css('height','auto');
        $('.list-results').addClass('animate__animated animate__fadeIn');
    });
});

</script>