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
        <a href="<?php echo home_url(); ?>/variacion-producto">
            <div class="card-icon">
                <div class="circle-icon bg-blue">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4796.png" alt="">
                </div>
                <p>Pollo</p>
            </div>
        </a>
        <a href="">
            <div class="card-icon">
                <div class="circle-icon bg-blue">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4795.png" alt="">
                </div>
                <p>Pavo</p>
            </div>
        </a>
        <a href="">
            <div class="card-icon">
                <div class="circle-icon bg-blue">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4797.png" alt="">
                </div>
                <p>Embutidos</p>
            </div>
        </a>
        <a href="">
            <div class="card-icon">
                <div class="circle-icon bg-blue">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4797.png" alt="">
                </div>
                <p>Congelados</p>
            </div>
        </a>
        <a href="">
            <div class="card-icon">
                <div class="circle-icon bg-blue">   
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4792.png" alt="">
                </div>
                <p>Cerdos</p>
            </div>
        </a>
        <a href="">
            <div class="card-icon">
                <div class="circle-icon bg-blue">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4866.png" alt="">
                </div>
                <p>Celebraciones</p>
            </div>
        </a>
        <a href="">
            <div class="card-icon">
                <div class="circle-icon bg-blue">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4793.png" alt="">
                </div>
                <p>Huevos</p>
            </div>
        </a>
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