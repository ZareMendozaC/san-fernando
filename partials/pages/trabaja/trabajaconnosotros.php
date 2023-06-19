<?php

$main_title_trabaja = get_field("titulo_principal");
$subtitulo_trabaja = get_field("subtitulo");


?>



<section>
    <div class="trabaja-head zigzag">
        <h1 class="color-white"><?php echo $main_title_trabaja ?></h1>
    </div>

    <div class="section-1 container">
        <article class="section-text">
            <h2><?php echo $subtitulo_trabaja ?></h2>

            <?php $descripcion_trabaja = get_field("descripcion"); ?>
            <p class="description-trabajo">
                <?php echo $descripcion_trabaja ?>
            </p>

            <?php
            $descripcion_trabaja = get_field("textos_boton");
            $url_boton_trabaja = get_field("url_boton");
            $url_politicas_trabaja = get_field("link_politicas_de_privacidad");

            ?>
            <a class="button-oferta" href="<?= $url_boton_trabaja ?>">
                <?php echo $descripcion_trabaja ?>
            </a>

            <div>Al hacer click declara haber leído la
                <a href="<?= $url_politicas_trabaja ?>" target="_blank">Política de Privacidad.</a>
            </div>

        </article>

        <figure>
            <img class="" src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/image-51.png" alt="">
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


        <div>
            <?php
            $titulo_trabaja = get_field("titulo");
            $descripcion2_trabaja = get_field("descripcion_2");
            $text_boton_trabaja = get_field("texto_boton");

            ?>
            <h2><?php echo $titulo_trabaja ?></h2>

            <p><?php echo $descripcion2_trabaja ?></p>

            <a href=""><?php echo $text_boton_trabaja ?></a>
        </div>


    </div>






</section>