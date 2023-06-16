<?php
$slider_banner = get_field("lista_de_imagenes");
?>
<section class="main-banner">
    <?php foreach ($slider_banner as $item) : ?>
        <?php
        $item_image = $item["imagen"];
        $item_image_url = $item_image ? $item_image["url"] : null;
        $item_url = $item["link_y_utms"];
        $item_estado = $item["estado"];
        ?>
        <?php if ($item_url) : ?>
            <a href="<?= $item_url; ?>" target="_blank">
            <?php endif; ?>
            <div class="container-main bg-main-banner" style="background-image: url(<?= $item_image_url; ?>)">
            </div>
            <?php if ($item_url) : ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</section>
<?php
$titulo = get_field("titulo");
$imagen_fondo = get_field("imagen_de_fondo");
$lista_productos = get_field('listado_de_productos');
?>
<section>
    <div class="container-main bg-productos" style="background-image: url(<?php echo $imagen_fondo['url']; ?>)">
        <?php if ($titulo) : ?>
            <div class="content-h2">
                <h2 class="text-center color-blue"><?= $titulo; ?></h2>
                <svg class="img-sub" width="288" height="36" viewBox="0 0 288 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1179_8114)">
                        <path d="M287.019 3.65718C287.019 3.65718 55.3468 -7.10545 3.18945 29.7358" stroke="#004A98" stroke-width="7" stroke-miterlimit="10" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1179_8114">
                            <rect width="286.313" height="35.0475" fill="white" transform="translate(0.84375)" />
                        </clipPath>
                    </defs>
                </svg>


            </div>
        <?php endif; ?>
        <div class="lista-productos">
            <?php foreach ($lista_productos as $item) : ?>
                <?php
                $item_image = $item["imagen_producto"];
                $item_image_url = $item_image ? $item_image["url"] : null;
                $item_link = $item["url_landing"];
                ?>
                <?php if ($item_link) : ?>
                    <a href="<?= $item_url; ?>" target="_blank">
                    <?php endif; ?>
                    <img style="width: calc(100vw*(230/var(--width_base)));" src="<?= $item_image_url; ?>" alt="">
                    <?php if ($item_link) : ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="center-btn">
            <a class="btn-ver-productos mrg-t_18" href="">Ver todos los productos</a>
        </div>
    </div>
</section>
<?php
$titulo_cotiza = get_field('titulo_cotiza');
$descripcion_cotiza = get_field('descripcion_cotiza');
$opciones_cotiza_y_compra = get_field('opciones_cotiza_y_compra');
?>
<section class="bg-beige pdg-t-184">
    <div class="container">
        <?php if ($titulo_cotiza) : ?>
            <div class="content-h2">
                <h2 class="text-center color-blue"><?= $titulo_cotiza; ?></h2>
                <svg class="img-sub-2" width="240" height="30" viewBox="0 0 240 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M239.801 5.19509C239.801 5.19509 45.9454 -3.81073 2.30176 27.0169" stroke="#004A98" stroke-width="7" stroke-miterlimit="10" />
                </svg>
            </div>
            <p class="p-subtitle color-gris pdg-t-70 wp-658"><?= $descripcion_cotiza; ?></p>
        <?php endif; ?>
        <div class="list-cotiza">
            <?php if( have_rows('opciones_cotiza_y_compra') ): ?>
                <?php while( have_rows('opciones_cotiza_y_compra') ): the_row(); 
                    $titulo_quiero = get_sub_field('titulo_quiero');
                    $icono = get_sub_field('icono');
                    $texto_boton_quiero = get_sub_field('texto_boton_quiero');
                    $link_boton_quiero = get_sub_field('link_boton_quiero');
                    ?>
                    <div class="card-cotiza">
                        <img src="<?= $icono['url'];?>" alt="">
                        <div class="card-cotiza-text">
                            <p><?= $titulo_quiero;?></p>
                            <a class="btn-c" href="<?= $link_boton_quiero;?>"><?= $texto_boton_quiero; ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="section-blog">
    <div class="container-left">
        <div class="col-blog-1">
            <div class="content-h2">
                <h2 class="color-blue">Blog <p>Bien servido</p></h2>
                <svg class="img-sub-3" width="254" height="77" viewBox="0 0 254 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M252.368 11.7697C228.645 21.0004 164.399 18.6004 87.2298 5.86197C-26.7702 -12.9688 -24.6471 120.231 99.6914 55.2466" stroke="#004C97" stroke-width="7.38462" stroke-miterlimit="10"/>
                </svg>
            </div>
            <p class="p-subtitle">Un espacio creado para ti, donde podrás encontrar consejos nutricionales y simpáticas ideas simples para aplicar en casa.</p>
            <a class="btn-ver-articulos" href="">Ver todos los artículos</a>
        </div>
        <div class="col-blog-2">
            <div class="slider-blog">
                <div class="card-blog">
                    <div class="img-blog">

                    </div>
                    <div class="btn-cat">Nutrición</div>
                    <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                    <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                    <a href="">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</section>