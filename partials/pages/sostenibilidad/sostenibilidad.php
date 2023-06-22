<?php

$titulo_principal = get_field("titulo_principal");
$subtitulo = get_field("subtitulo");
$description = get_field("descripcion");
$icono = get_field("opcion");
$opcion_texto = get_field("opcion_texto");
$link_saber_mas = get_field("link_saber_mas");
$img = get_field("imagen");

$slider_logros = get_field("listado_de_logros");

$description_responsabilidad = get_field("descripcion_responsabilidad");

$titulo_compromisos = get_field("titulo_compromisos");
$description_compromisos = get_field("descripcion_compromisos");
$imagen_compromisos = get_field("imagen_compromisos");
$lista_compromisos = get_field("lista_compromisos");


$titulo_gestion = get_field("titulo_gestion");
$img_gestion = get_field("imagen_gestion");
$texto_gestion = get_field("texto_gestion");
$lista_gestion = get_field("lista_gestion");

$titulo_seguridad = get_field("titulo_seguridad");
$description_seguridad = get_field("descripcion_seguridad");
$imagen_seguridad = get_field("imagen_seguridad");

?>

<section>

    <div class="trabaja-head">
        <h1>
            <?= $titulo_principal ?>
        </h1>

    </div>

    <section>

        <article class="contain-1 container">

            <div class="text-contain">
                <h2><?= $subtitulo ?></h2>

                <p class="description"><?= $description ?></p>

                <!-- <svg width="504" height="6" viewBox="0 0 504 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M504 0.288574H0.5V5.01447H504V0.288574Z" fill="#CDAC92" />
                </svg> -->


                <div class="icon-section">
                    <img class="icono-group" src="<?= $icono["url"] ?>" alt="icono">

                    <div class="text-icon">
                        <p><?= $opcion_texto ?></p>

                        <a href="<?= $link_saber_mas ?>">
                            Saber más
                        </a>
                    </div>

                </div>

                <!-- <svg width="504" height="6" viewBox="0 0 504 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M504 0.288574H0.5V5.01447H504V0.288574Z" fill="#CDAC92" />
                </svg> -->
            </div>


            <figure>
                <img src="<?= $img["url"] ?>" alt="">
            </figure>

        </article>

        <article class="contain-2 container">
            <h2>Logros</h2>
            <p class="description-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <ul>
                <?php foreach ($slider_logros as $item) : ?>

                    <?php
                    $item_image = $item["icono"];
                    $item_image_url = $item_image ? $item_image["url"] : null;
                    $item_text = $item["texto"];
                    ?>
                    <?php if ($item) : ?>
                        <li>
                            <img src="<?= $item_image_url ?>" alt="iconos">
                            <p><?= $item_text ?></p>
                        </li>
                    <?php endif; ?>

                <?php endforeach ?>
            </ul>

            <a href="">
                Ver todos los logros
            </a>

        </article>

        <article class="contain-3">

            <h2>Responsabilidad Social</h2>

            <p><?= $description_responsabilidad ?></p>



        </article>

        <article class="contain-4 container">
            <figure>
                <img src="<?= $imagen_compromisos["url"] ?>" alt="imagen 2 personas">
            </figure>

            <div>
                <h2><?= $titulo_compromisos ?></h2>
                <p class="description-compromisos"><?= $description_compromisos ?></p>

                <ul>
                    <?php foreach ($lista_compromisos as $lista) : ?>

                        <?php
                        $item_compromiso_img = $lista["lista_imagen_compromisos"];
                        $item_compromiso_image_url = $item_compromiso_img ? $item_compromiso_img["url"] : null;
                        $lista_text = $lista["nombre_compromiso"];
                        ?>

                        <?php if ($lista) : ?>
                            <li>
                                <img src="<?= $item_compromiso_image_url ?>" alt="">

                                <p><?= $lista_text ?></p>

                            </li>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </ul>
            </div>


        </article>

        <article class="contain-5">
            <section class="inner-section-1 container">

                <div>
                    <h2><?= $titulo_gestion ?></h2>

                    <p><?= $texto_gestion  ?></p>

                    <span>Durante el 2018, hemos realizado las siguientes acciones para atenuar el impacto ambiental</span>

                </div>

                <figure>
                    <img src="<?= $img_gestion["url"] ?>" alt="">
                </figure>

            </section>

            <section class="inner-section-2 container">
                <ul>
                    <?php foreach ($lista_gestion as $list_ges) : ?>

                        <?php
                        $item_gestion_img = $list_ges["icono"];
                        $item_gestion_image_url = $item_gestion_img ? $item_gestion_img["url"] : null;
                        $list_text = $list_ges["descripcion"];
                        ?>

                        <?php if ($list_ges) : ?>
                            <li>
                                <figure>
                                    <img src="<?= $item_gestion_image_url ?>" alt="">
                                </figure>

                                <p><?= $list_text ?></p>

                            </li>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </ul>
            </section>


        </article>

        <article class="contain-6 container">

            <div>
                <h2><?= $titulo_seguridad ?></h2>

                <p><?= $description_seguridad ?></p>
            </div>

            <figure>
                <img src="<?= $imagen_seguridad["url"] ?>" alt="imagen personas">
            </figure>

        </article>

    </section>



</section>