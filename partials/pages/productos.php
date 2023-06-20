<?php 
    $imagen_banner= get_field('imagen_banner');
    $titulo_productos= get_field('titulo_productos');
    $descripcion_productos= get_field('descripcion_productos');
    $titulo_llena_tu_refri= get_field('titulo_llena_tu_refri');
    $descripcion_llena_tu_refri= get_field('descripcion_llena_tu_refri');
    $texto_boton_refri= get_field('texto_boton_refri');
    $url_boton_llena_tu_refri= get_field('url_boton_llena_tu_refri');
    $imagen_de_fondo_llena_tu_refri= get_field('imagen_de_fondo_llena_tu_refri');
?>
<h1 class="h1-marker">Productos</h1>
<section class="container-full section-productos">
    <div class="general-banner-img" style="background: url('<?php echo $imagen_banner['url'];?>');">
    </div>
    <div class="container pdt-productos">
        <h2 class="color-blue text-center"><?= $titulo_productos; ?></h2>
        <p class="p-subtitle-2 color-gris"><?= $descripcion_productos; ?></p>
    </div>
    <div class="row-icon-productos">
        <div class="card-icon">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4798.png" alt="">
            <p>Pollo</p>
        </div>
        <div class="card-icon">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4800.png" alt="">
            <p>Pavo</p>
        </div>
        <div class="card-icon">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4799.png" alt="">
            <p>Embutidos</p>
        </div>
        <div class="card-icon">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4799.png" alt="">
            <p>Congelados</p>
        </div>
        <div class="card-icon">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4803.png" alt="">
            <p>Cerdos</p>
        </div>
        <div class="card-icon">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4801.png" alt="">
            <p>Celebraciones</p>
        </div>
        <div class="card-icon">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4804.png" alt="">
            <p>Huevos</p>
        </div>
    </div>
    <div class="container">
        <img class="line-pick" src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-14.png" alt="">
    </div>
    <div class="container bg-llena-tu-refri" style="background: url('<?php echo $imagen_de_fondo_llena_tu_refri['url'];?>'),#96DAEA;">
        <p class="title color-blue"><?= $titulo_llena_tu_refri;?></p>
        <p class="texto color-gris"><?= $descripcion_llena_tu_refri; ?></p>
        <a class="btn-menu" href="<?= $url_boton_llena_tu_refri; ?>"><?= $texto_boton_refri; ?></a>
    </div>
</section>