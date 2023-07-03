<?php

$img_portada = get_field("img_portada");

$text_opcion1 = get_field("puntos_canje_text");
$url_opcion1 = get_field("puntos_de_canje");

$img1 = get_field("opcion_img");

$text_opcion2 = get_field("visitar_web_text");
$urle_opcion2 = get_field("visitar_web");

$img_tienda_online = get_field("img_tienda_online");
$img_tienda_app = get_field("img_tienda_app");

$url_google_app = get_field("url_google_app");
$url_ios_app = get_field("url_ios_app");
$img_google = get_field("img_google");
$img_ios = get_field("img_ios");

$mas_informacion = get_field("mas_informacion");

?>

<section class="contain-opciones--canje">

  <figure class="portada">
    <img src="<?= $img_portada["url"] ?>" alt="imagen-portada">
  </figure>

  <section class="containt-canje container">
    <div class="section-1-canje">
      <h2>Opción 1</h2>
      <p class="first-text">Canjea tu vale presencialmente</p>
      <p class="second-text">A nivel nacional</p>

      <h3>TIENDAS</h3>
      <p class="third-text">Para vale digital y físico</p>

      <img src="<?= $img1["url"] ?>" alt="">
      <p class="fourth-text">Recoge tu pavo en los lugares de canje cerca de tí</p>

      <a href="<?= $url_opcion1 ?> ">
        <p><?= $text_opcion1 ?></p>
      </a>
    </div>

    <section class="section-2-canje">
      <div class="title-canje-2">
        <h2>Opción 2</h2>
        <p class="text-1">Canjea tu vale vía Delivery</p>
        <p class="text-2">Solo válido para Lima</p>
      </div>

      <div class="part-1-canje">
        <div class="canje-block--1">
          <h2>TIENDA ONLINE</h2>
          <p class="text-1">Para vale físico</p>
          <img src="<?= $img_tienda_online["url"] ?>" alt="">
          <p class="text-2">Canjea tu vale y encuentra otros productos y descuentos exclusivos en la tienda virtual</p>
          <a href="<?= $urle_opcion2 ?>">
            <p><?= $text_opcion2 ?></p>
          </a>
        </div>
        <div class="canje-block--2">
          <h2>APP MÓVIL</h2>
          <p class="text-1">Para vale digital y físico</p>
          <img class="icono-movil" src="<?= $img_tienda_app["url"] ?>" alt="">
          <p class="text-2">Recibe tu pavito sin salir de casa y vive la experiencia San Fernando desde nuestra APP</p>
          <figure>
            <a href="<?= $url_google_app ?>">
              <img src="<?= $img_google["url"] ?>" alt="">
            </a>
            <a href="<?= $url_ios_app ?>">
              <img src="<?= $img_ios["url"] ?>" alt="">
            </a>

          </figure>
          <a href="<?= $mas_informacion ?>">
            <p class="link-info">Más Informacion</p>
          </a>
        </div>

      </div>


    </section>
  </section>



</section>