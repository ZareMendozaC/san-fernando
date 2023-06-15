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
                <img class="img-sub" src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Frame-16.png" alt="">
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
<section>
    <div class="container">
        <?php if ($titulo_cotiza) : ?>
            <div class="content-h2">
                <h2 class="text-center color-blue"><?= $titulo_cotiza; ?></h2>
                <img class="img-sub-2" src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Frame-16.png" alt="">
            </div>
        <?php endif; ?>
    </div>
</section>