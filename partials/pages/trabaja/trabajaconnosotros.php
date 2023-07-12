<?php

$main_title_trabaja = get_field("titulo_principal");
$subtitulo_trabaja = get_field("subtitulo");

$descripcion_trabaja = get_field("descripcion");

$button_texto = get_field("textos_boton");
$url_boton_trabaja = get_field("url_boton");
$url_politicas_trabaja = get_field("link_politicas_de_privacidad");
$img_1_trabaja = get_field("img_1_trabaja");

?>



<section class="trabaja-contain">
  <div class="trabaja-head">
    <h1 class="color-white"><?php echo $main_title_trabaja ?></h1>
  </div>

  <div class="section-1 container">
    <article class="section-text">
      <h2><?php echo $subtitulo_trabaja ?></h2>

      <p class="description-trabajo">
        <?php echo $descripcion_trabaja ?>
      </p>

      <a class="button-oferta" href="<?= $url_boton_trabaja ?>" target="_blank">
        <?php echo $button_texto ?>
      </a>

      <div>Al hacer click declara haber leído la
        <a href="<?= $url_politicas_trabaja ?>" target="_blank">Política de Privacidad.</a>
      </div>

    </article>

    <figure>
      <img class="" src="<?php echo $img_1_trabaja["url"] ?>" alt="imagen de trabajadores">
    </figure>
  </div>


  <?php
  $fondo_trabaja = get_field("imagen_de_fondo_lista");
  foreach ($fondo_trabaja as $item) {
    $desktop_image = $item["imagen_desktop"];
    $mobile_image = $item["imagen_mobile"];
    $person_mobile_image = $item["imagen_mobile_persona"];
  };

  ?>

  <div class="section-2" style="background-image: url(<?= $desktop_image["url"] ?>);">


    <div class="description">
      <?php
      $titulo_trabaja = get_field("titulo");
      $descripcion2_trabaja = get_field("descripcion_2");
      $text_boton_trabaja = get_field("texto_boton");

      ?>
      <h2><?php echo $titulo_trabaja ?></h2>

      <p><?php echo $descripcion2_trabaja ?></p>

      <button onclick="modal_work_us.showModal()" class="button-open-modal"><?php echo $text_boton_trabaja ?></button>
    </div>

  </div>

  <div class="section-2-mobile" style="background-image: url(<?= $mobile_image["url"] ?>);">
    <div>
      <?php
      $titulo_trabaja = get_field("titulo");
      $descripcion2_trabaja = get_field("descripcion_2");
      $text_boton_trabaja = get_field("texto_boton");

      ?>
      <h2><?php echo $titulo_trabaja ?></h2>

      <p><?php echo $descripcion2_trabaja ?></p>

      <button onclick="modal_work_us.showModal()" class="button-open-modal"><?php echo $text_boton_trabaja ?></button>
    </div>
  </div>


  <!-- Open the modal using ID.showModal() method -->

  <dialog id="modal_work_us" class="modal-work-us">
    <h3 class="color-blue text-center font-bold">¿Quieres ser distribuidor?</h3>
    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a justo magna.</p>-->
    <?= do_shortcode('[contact-form-7 id="2188" title="Distribuidores"]'); ?>
    <form method="dialog" class="modal-close">
      <button class="btn">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18.4656 6.25391L6.46558 18.2539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M6.46558 6.25391L18.4656 18.2539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </form>
  </dialog>



</section>