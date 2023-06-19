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
            <?php if (have_rows('opciones_cotiza_y_compra')) : ?>
                <?php while (have_rows('opciones_cotiza_y_compra')) : the_row();
                    $titulo_quiero = get_sub_field('titulo_quiero');
                    $icono = get_sub_field('icono');
                    $texto_boton_quiero = get_sub_field('texto_boton_quiero');
                    $link_boton_quiero = get_sub_field('link_boton_quiero');
                ?>
                    <div class="card-cotiza">
                        <img src="<?= $icono['url']; ?>" alt="">
                        <div class="card-cotiza-text">
                            <p><?= $titulo_quiero; ?></p>
                            <a class="btn-c" href="<?= $link_boton_quiero; ?>"><?= $texto_boton_quiero; ?></a>
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
                <h2 class="color-blue">Blog <p>Bien servido</p>
                </h2>
                <svg class="img-sub-3" width="254" height="77" viewBox="0 0 254 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M252.368 11.7697C228.645 21.0004 164.399 18.6004 87.2298 5.86197C-26.7702 -12.9688 -24.6471 120.231 99.6914 55.2466" stroke="#004C97" stroke-width="7.38462" stroke-miterlimit="10" />
                </svg>
            </div>
            <p class="p-subtitle">Un espacio creado para ti, donde podrás encontrar consejos nutricionales y simpáticas ideas simples para aplicar en casa.</p>
            <a class="btn-ver-articulos" href="">Ver todos los artículos</a>
        </div>
        <div class="splide">
            <div class="col-blog-2 splide__track">
                <div class="slider-blog splide__list">
                    <div class="card-blog splide__slide">
                        <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668.png)">
                        </div>
                        <div class="btn-cat">Nutrición</div>
                        <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                        <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                        <a href="">Leer más</a>
                    </div>
                    <div class="card-blog splide__slide">
                        <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668-1.png">
                        </div>
                        <div class="btn-cat">Nutrición</div>
                        <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                        <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                        <a href="">Leer más</a>
                    </div>
                    <div class="card-blog splide__slide">
                        <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Mask-group-35.png)">
                        </div>
                        <div class="btn-cat">Nutrición</div>
                        <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                        <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                        <a href="">Leer más</a>
                    </div>
                    <div class="card-blog splide__slide">
                        <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668-1.png">
                        </div>
                        <div class="btn-cat">Nutrición</div>
                        <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                        <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                        <a href="">Leer más</a>
                    </div>
                    <div class="card-blog splide__slide">
                        <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668-1.png">
                        </div>
                        <div class="btn-cat">Nutrición</div>
                        <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                        <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                        <a href="">Leer más</a>
                    </div>
                    <div class="card-blog splide__slide">
                        <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668-1.png">
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
<section class="section-nuestrafamilia">
    <div class="container d-flex">
        <div class="col-nuestra-1">
            <div class="content-h2">
                <h2 class="color-white">Desde hace más <br>de 75 años venimos<br>agrandando<p>nuestra familia</p>
                </h2>
                <svg class="img-sub-4" width="231" height="69" viewBox="0 0 231 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M226.099 7.00907C222.926 8.4265 218.809 9.43895 213.882 10.1139C200.517 11.8688 186.411 12.3413 171.966 11.5313C157.522 10.5864 139.095 8.76398 116.619 6.26661L110.477 5.45665C92.8603 3.36426 79.226 1.94683 69.439 1.27186C59.652 0.596895 51.3499 0.664392 44.1953 1.60934C10.717 6.06412 -1.09495 24.8957 1.13244 41.7698C2.27988 50.2744 7.8821 58.0365 16.4542 63.0987C25.7687 68.2285 36.9731 69.9159 49.865 68.2285C55.9397 67.4185 63.0943 65.3936 71.7339 62.3563C80.306 59.1164 87.0556 55.4041 92.0504 51.3543L88.743 44.0647C84.4232 47.642 78.2136 51.2868 69.979 54.6617C61.7444 58.0365 54.5897 60.0614 48.8525 60.8039C25.5662 63.8412 10.2445 53.3117 8.55707 40.8249C7.61212 33.8727 9.907 26.8531 15.0367 21.7908C21.5839 15.1087 31.6409 10.9239 45.2077 9.16896C51.9574 8.29151 59.922 8.29151 69.3715 8.96647C78.821 9.64144 92.2528 10.9239 109.667 12.8813C133.561 15.7836 153.81 17.6735 170.009 18.7535C186.411 19.7659 201.935 19.3609 216.649 17.4035C221.441 16.7961 225.964 15.7161 230.081 14.0287L226.099 7.00907Z" fill="#96DAEA" />
                </svg>
            </div>
            <p class="p-subtitle color-white">Es un orgullo para nosotros poder brindar productos de calidad y de alto valor nutricional para la población nuestro país.</p>
            <a class="btn-ver-mas" href="">Ver más</a>
        </div>
        <div class="col-nuestra-2">
            <div class="col-nuestra-22">
            <div class="box-cifras">
                <div class="box-cifras-1">
                    <svg width="89" height="89" viewBox="0 0 89 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.429077" width="88.4758" height="88.4758" rx="44.2379" fill="white" />
                        <path d="M44.2379 51.413C42.9037 51.413 41.5994 51.0173 40.4901 50.2761C39.3807 49.5348 38.516 48.4812 38.0054 47.2486C37.4949 46.0159 37.3613 44.6595 37.6216 43.3509C37.8819 42.0423 38.5244 40.8403 39.4678 39.8969C40.4112 38.9534 41.6133 38.3109 42.9218 38.0506C44.2304 37.7903 45.5868 37.9239 46.8195 38.4345C48.0522 38.9451 49.1057 39.8098 49.847 40.9191C50.5882 42.0285 50.9839 43.3328 50.9839 44.667C50.9839 46.4561 50.2732 48.172 49.008 49.4371C47.7429 50.7022 46.0271 51.413 44.2379 51.413ZM44.2379 41.294C43.5708 41.294 42.9187 41.4918 42.364 41.8625C41.8093 42.2331 41.377 42.7599 41.1217 43.3762C40.8664 43.9925 40.7996 44.6707 40.9297 45.325C41.0599 45.9793 41.3811 46.5803 41.8529 47.0521C42.3246 47.5238 42.9256 47.845 43.5799 47.9752C44.2342 48.1053 44.9124 48.0385 45.5287 47.7832C46.145 47.5279 46.6718 47.0956 47.0424 46.5409C47.4131 45.9862 47.6109 45.3341 47.6109 44.667C47.6109 43.7724 47.2555 42.9145 46.623 42.2819C45.9904 41.6494 45.1325 41.294 44.2379 41.294ZM54.3569 63.2184C54.3569 60.5347 53.2908 57.9609 51.3931 56.0632C49.4954 54.1656 46.9216 53.0995 44.2379 53.0995C41.5542 53.0995 38.9804 54.1656 37.0827 56.0632C35.1851 57.9609 34.119 60.5347 34.119 63.2184C34.119 63.6657 34.2966 64.0947 34.6129 64.4109C34.9292 64.7272 35.3582 64.9049 35.8055 64.9049C36.2527 64.9049 36.6817 64.7272 36.998 64.4109C37.3143 64.0947 37.4919 63.6657 37.4919 63.2184C37.4919 61.4293 38.2027 59.7134 39.4678 58.4483C40.7329 57.1832 42.4488 56.4724 44.2379 56.4724C46.0271 56.4724 47.7429 57.1832 49.008 58.4483C50.2732 59.7134 50.9839 61.4293 50.9839 63.2184C50.9839 63.6657 51.1616 64.0947 51.4778 64.4109C51.7941 64.7272 52.2231 64.9049 52.6704 64.9049C53.1177 64.9049 53.5466 64.7272 53.8629 64.4109C54.1792 64.0947 54.3569 63.6657 54.3569 63.2184ZM54.3569 37.921C53.0226 37.921 51.7184 37.5254 50.609 36.7841C49.4996 36.0429 48.635 34.9893 48.1244 33.7566C47.6138 32.524 47.4802 31.1676 47.7405 29.859C48.0008 28.5504 48.6433 27.3484 49.5868 26.4049C50.5302 25.4615 51.7322 24.819 53.0408 24.5587C54.3494 24.2984 55.7058 24.432 56.9384 24.9426C58.1711 25.4532 59.2247 26.3178 59.9659 27.4272C60.7072 28.5366 61.1028 29.8408 61.1028 31.1751C61.1028 32.9642 60.3921 34.6801 59.127 35.9452C57.8619 37.2103 56.146 37.921 54.3569 37.921ZM54.3569 27.8021C53.6898 27.8021 53.0376 27.9999 52.4829 28.3705C51.9283 28.7411 51.4959 29.2679 51.2406 29.8843C50.9853 30.5006 50.9186 31.1788 51.0487 31.8331C51.1788 32.4874 51.5001 33.0884 51.9718 33.5601C52.4435 34.0318 53.0445 34.3531 53.6988 34.4832C54.3531 34.6134 55.0313 34.5466 55.6477 34.2913C56.264 34.036 56.7908 33.6037 57.1614 33.049C57.532 32.4943 57.7299 31.8422 57.7299 31.1751C57.7299 30.2805 57.3745 29.4225 56.7419 28.79C56.1094 28.1574 55.2514 27.8021 54.3569 27.8021ZM64.4758 49.7265C64.4732 47.0436 63.4062 44.4713 61.5091 42.5742C59.612 40.6772 57.0398 39.6102 54.3569 39.6075C53.9096 39.6075 53.4806 39.7852 53.1643 40.1015C52.8481 40.4178 52.6704 40.8467 52.6704 41.294C52.6704 41.7413 52.8481 42.1703 53.1643 42.4865C53.4806 42.8028 53.9096 42.9805 54.3569 42.9805C56.146 42.9805 57.8619 43.6912 59.127 44.9564C60.3921 46.2215 61.1028 47.9373 61.1028 49.7265C61.1028 50.1738 61.2805 50.6027 61.5968 50.919C61.9131 51.2353 62.3421 51.413 62.7893 51.413C63.2366 51.413 63.6656 51.2353 63.9819 50.919C64.2981 50.6027 64.4758 50.1738 64.4758 49.7265ZM34.119 37.921C32.7847 37.921 31.4805 37.5254 30.3711 36.7841C29.2617 36.0429 28.3971 34.9893 27.8865 33.7566C27.3759 32.524 27.2423 31.1676 27.5026 29.859C27.7629 28.5504 28.4054 27.3484 29.3488 26.4049C30.2923 25.4615 31.4943 24.819 32.8029 24.5587C34.1115 24.2984 35.4679 24.432 36.7005 24.9426C37.9332 25.4532 38.9868 26.3178 39.728 27.4272C40.4693 28.5366 40.8649 29.8408 40.8649 31.1751C40.8649 32.9642 40.1542 34.6801 38.8891 35.9452C37.624 37.2103 35.9081 37.921 34.119 37.921ZM34.119 27.8021C33.4518 27.8021 32.7997 27.9999 32.245 28.3705C31.6903 28.7411 31.258 29.2679 31.0027 29.8843C30.7474 30.5006 30.6806 31.1788 30.8108 31.8331C30.9409 32.4874 31.2622 33.0884 31.7339 33.5601C32.2056 34.0318 32.8066 34.3531 33.4609 34.4832C34.1152 34.6134 34.7934 34.5466 35.4097 34.2913C36.0261 34.036 36.5529 33.6037 36.9235 33.049C37.2941 32.4943 37.4919 31.8422 37.4919 31.1751C37.4919 30.2805 37.1366 29.4225 36.504 28.79C35.8715 28.1574 35.0135 27.8021 34.119 27.8021ZM27.373 49.7265C27.373 47.9373 28.0837 46.2215 29.3488 44.9564C30.614 43.6912 32.3298 42.9805 34.119 42.9805C34.5662 42.9805 34.9952 42.8028 35.3115 42.4865C35.6278 42.1703 35.8055 41.7413 35.8055 41.294C35.8055 40.8467 35.6278 40.4178 35.3115 40.1015C34.9952 39.7852 34.5662 39.6075 34.119 39.6075C31.4361 39.6102 28.8638 40.6772 26.9667 42.5742C25.0696 44.4713 24.0027 47.0436 24 49.7265C24 50.1738 24.1777 50.6027 24.494 50.919C24.8102 51.2353 25.2392 51.413 25.6865 51.413C26.1338 51.413 26.5627 51.2353 26.879 50.919C27.1953 50.6027 27.373 50.1738 27.373 49.7265Z" fill="#004A96" />
                    </svg>
                    <div class="box-cifras-2">
                        <p class="title-cifra color-white">4507</p>
                        <p class="texto-cifra color-white">Trabajadores</p>
                    </div>
                </div>
                <div class="box-cifras-1">
                    <svg width="89" height="89" viewBox="0 0 89 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.429077" width="88.4758" height="88.4758" rx="44.2379" fill="white" />
                        <path d="M44.2379 51.413C42.9037 51.413 41.5994 51.0173 40.4901 50.2761C39.3807 49.5348 38.516 48.4812 38.0054 47.2486C37.4949 46.0159 37.3613 44.6595 37.6216 43.3509C37.8819 42.0423 38.5244 40.8403 39.4678 39.8969C40.4112 38.9534 41.6133 38.3109 42.9218 38.0506C44.2304 37.7903 45.5868 37.9239 46.8195 38.4345C48.0522 38.9451 49.1057 39.8098 49.847 40.9191C50.5882 42.0285 50.9839 43.3328 50.9839 44.667C50.9839 46.4561 50.2732 48.172 49.008 49.4371C47.7429 50.7022 46.0271 51.413 44.2379 51.413ZM44.2379 41.294C43.5708 41.294 42.9187 41.4918 42.364 41.8625C41.8093 42.2331 41.377 42.7599 41.1217 43.3762C40.8664 43.9925 40.7996 44.6707 40.9297 45.325C41.0599 45.9793 41.3811 46.5803 41.8529 47.0521C42.3246 47.5238 42.9256 47.845 43.5799 47.9752C44.2342 48.1053 44.9124 48.0385 45.5287 47.7832C46.145 47.5279 46.6718 47.0956 47.0424 46.5409C47.4131 45.9862 47.6109 45.3341 47.6109 44.667C47.6109 43.7724 47.2555 42.9145 46.623 42.2819C45.9904 41.6494 45.1325 41.294 44.2379 41.294ZM54.3569 63.2184C54.3569 60.5347 53.2908 57.9609 51.3931 56.0632C49.4954 54.1656 46.9216 53.0995 44.2379 53.0995C41.5542 53.0995 38.9804 54.1656 37.0827 56.0632C35.1851 57.9609 34.119 60.5347 34.119 63.2184C34.119 63.6657 34.2966 64.0947 34.6129 64.4109C34.9292 64.7272 35.3582 64.9049 35.8055 64.9049C36.2527 64.9049 36.6817 64.7272 36.998 64.4109C37.3143 64.0947 37.4919 63.6657 37.4919 63.2184C37.4919 61.4293 38.2027 59.7134 39.4678 58.4483C40.7329 57.1832 42.4488 56.4724 44.2379 56.4724C46.0271 56.4724 47.7429 57.1832 49.008 58.4483C50.2732 59.7134 50.9839 61.4293 50.9839 63.2184C50.9839 63.6657 51.1616 64.0947 51.4778 64.4109C51.7941 64.7272 52.2231 64.9049 52.6704 64.9049C53.1177 64.9049 53.5466 64.7272 53.8629 64.4109C54.1792 64.0947 54.3569 63.6657 54.3569 63.2184ZM54.3569 37.921C53.0226 37.921 51.7184 37.5254 50.609 36.7841C49.4996 36.0429 48.635 34.9893 48.1244 33.7566C47.6138 32.524 47.4802 31.1676 47.7405 29.859C48.0008 28.5504 48.6433 27.3484 49.5868 26.4049C50.5302 25.4615 51.7322 24.819 53.0408 24.5587C54.3494 24.2984 55.7058 24.432 56.9384 24.9426C58.1711 25.4532 59.2247 26.3178 59.9659 27.4272C60.7072 28.5366 61.1028 29.8408 61.1028 31.1751C61.1028 32.9642 60.3921 34.6801 59.127 35.9452C57.8619 37.2103 56.146 37.921 54.3569 37.921ZM54.3569 27.8021C53.6898 27.8021 53.0376 27.9999 52.4829 28.3705C51.9283 28.7411 51.4959 29.2679 51.2406 29.8843C50.9853 30.5006 50.9186 31.1788 51.0487 31.8331C51.1788 32.4874 51.5001 33.0884 51.9718 33.5601C52.4435 34.0318 53.0445 34.3531 53.6988 34.4832C54.3531 34.6134 55.0313 34.5466 55.6477 34.2913C56.264 34.036 56.7908 33.6037 57.1614 33.049C57.532 32.4943 57.7299 31.8422 57.7299 31.1751C57.7299 30.2805 57.3745 29.4225 56.7419 28.79C56.1094 28.1574 55.2514 27.8021 54.3569 27.8021ZM64.4758 49.7265C64.4732 47.0436 63.4062 44.4713 61.5091 42.5742C59.612 40.6772 57.0398 39.6102 54.3569 39.6075C53.9096 39.6075 53.4806 39.7852 53.1643 40.1015C52.8481 40.4178 52.6704 40.8467 52.6704 41.294C52.6704 41.7413 52.8481 42.1703 53.1643 42.4865C53.4806 42.8028 53.9096 42.9805 54.3569 42.9805C56.146 42.9805 57.8619 43.6912 59.127 44.9564C60.3921 46.2215 61.1028 47.9373 61.1028 49.7265C61.1028 50.1738 61.2805 50.6027 61.5968 50.919C61.9131 51.2353 62.3421 51.413 62.7893 51.413C63.2366 51.413 63.6656 51.2353 63.9819 50.919C64.2981 50.6027 64.4758 50.1738 64.4758 49.7265ZM34.119 37.921C32.7847 37.921 31.4805 37.5254 30.3711 36.7841C29.2617 36.0429 28.3971 34.9893 27.8865 33.7566C27.3759 32.524 27.2423 31.1676 27.5026 29.859C27.7629 28.5504 28.4054 27.3484 29.3488 26.4049C30.2923 25.4615 31.4943 24.819 32.8029 24.5587C34.1115 24.2984 35.4679 24.432 36.7005 24.9426C37.9332 25.4532 38.9868 26.3178 39.728 27.4272C40.4693 28.5366 40.8649 29.8408 40.8649 31.1751C40.8649 32.9642 40.1542 34.6801 38.8891 35.9452C37.624 37.2103 35.9081 37.921 34.119 37.921ZM34.119 27.8021C33.4518 27.8021 32.7997 27.9999 32.245 28.3705C31.6903 28.7411 31.258 29.2679 31.0027 29.8843C30.7474 30.5006 30.6806 31.1788 30.8108 31.8331C30.9409 32.4874 31.2622 33.0884 31.7339 33.5601C32.2056 34.0318 32.8066 34.3531 33.4609 34.4832C34.1152 34.6134 34.7934 34.5466 35.4097 34.2913C36.0261 34.036 36.5529 33.6037 36.9235 33.049C37.2941 32.4943 37.4919 31.8422 37.4919 31.1751C37.4919 30.2805 37.1366 29.4225 36.504 28.79C35.8715 28.1574 35.0135 27.8021 34.119 27.8021ZM27.373 49.7265C27.373 47.9373 28.0837 46.2215 29.3488 44.9564C30.614 43.6912 32.3298 42.9805 34.119 42.9805C34.5662 42.9805 34.9952 42.8028 35.3115 42.4865C35.6278 42.1703 35.8055 41.7413 35.8055 41.294C35.8055 40.8467 35.6278 40.4178 35.3115 40.1015C34.9952 39.7852 34.5662 39.6075 34.119 39.6075C31.4361 39.6102 28.8638 40.6772 26.9667 42.5742C25.0696 44.4713 24.0027 47.0436 24 49.7265C24 50.1738 24.1777 50.6027 24.494 50.919C24.8102 51.2353 25.2392 51.413 25.6865 51.413C26.1338 51.413 26.5627 51.2353 26.879 50.919C27.1953 50.6027 27.373 50.1738 27.373 49.7265Z" fill="#004A96" />
                    </svg>
                    <div class="box-cifras-2">
                        <p class="title-cifra color-white">452</p>
                        <p class="texto-cifra color-white">Distribuidores</p>
                    </div>
                </div>
            </div>
            <div class="box-image" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Rectangle-840.png);">
                <div class="box-i-textos">
                    <p class="color-white">Sostenibilidad</p>
                    <a href="">Ver más <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.277344" y="0.639526" width="28" height="28" rx="14" fill="#DF0002" />
                            <path d="M17.6776 12.5196L13.0876 7.92959C12.9003 7.74334 12.6468 7.63879 12.3826 7.63879C12.1184 7.63879 11.865 7.74334 11.6776 7.92959C11.5839 8.02255 11.5095 8.13315 11.4587 8.25501C11.408 8.37687 11.3818 8.50757 11.3818 8.63959C11.3818 8.7716 11.408 8.9023 11.4587 9.02416C11.5095 9.14602 11.5839 9.25662 11.6776 9.34959L16.2776 13.9296C16.3714 14.0226 16.4458 14.1332 16.4965 14.255C16.5473 14.3769 16.5734 14.5076 16.5734 14.6396C16.5734 14.7716 16.5473 14.9023 16.4965 15.0242C16.4458 15.146 16.3714 15.2566 16.2776 15.3496L11.6776 19.9296C11.4893 20.1166 11.383 20.3707 11.3821 20.6361C11.3811 20.9014 11.4857 21.1563 11.6726 21.3446C11.8596 21.5329 12.1137 21.6392 12.3791 21.6401C12.6445 21.6411 12.8993 21.5366 13.0876 21.3496L17.6776 16.7596C18.2394 16.1971 18.555 15.4346 18.555 14.6396C18.555 13.8446 18.2394 13.0821 17.6776 12.5196Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            </div>
            <div class="col-nuestra-22 mrg-t-23">
            <div class="box-image-1" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Rectangle-842.png);">
            <div class="box-i-textos">
                    <p class="color-white">Prensa</p>
                    <a href="">Ver más <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.277344" y="0.639526" width="28" height="28" rx="14" fill="#DF0002" />
                            <path d="M17.6776 12.5196L13.0876 7.92959C12.9003 7.74334 12.6468 7.63879 12.3826 7.63879C12.1184 7.63879 11.865 7.74334 11.6776 7.92959C11.5839 8.02255 11.5095 8.13315 11.4587 8.25501C11.408 8.37687 11.3818 8.50757 11.3818 8.63959C11.3818 8.7716 11.408 8.9023 11.4587 9.02416C11.5095 9.14602 11.5839 9.25662 11.6776 9.34959L16.2776 13.9296C16.3714 14.0226 16.4458 14.1332 16.4965 14.255C16.5473 14.3769 16.5734 14.5076 16.5734 14.6396C16.5734 14.7716 16.5473 14.9023 16.4965 15.0242C16.4458 15.146 16.3714 15.2566 16.2776 15.3496L11.6776 19.9296C11.4893 20.1166 11.383 20.3707 11.3821 20.6361C11.3811 20.9014 11.4857 21.1563 11.6726 21.3446C11.8596 21.5329 12.1137 21.6392 12.3791 21.6401C12.6445 21.6411 12.8993 21.5366 13.0876 21.3496L17.6776 16.7596C18.2394 16.1971 18.555 15.4346 18.555 14.6396C18.555 13.8446 18.2394 13.0821 17.6776 12.5196Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="box-image-2" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Rectangle-843.png);">
            <div class="box-i-textos">
                    <p class="color-white">Trabaja con nosotros</p>
                    <a href="">Ver más <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.277344" y="0.639526" width="28" height="28" rx="14" fill="#DF0002" />
                            <path d="M17.6776 12.5196L13.0876 7.92959C12.9003 7.74334 12.6468 7.63879 12.3826 7.63879C12.1184 7.63879 11.865 7.74334 11.6776 7.92959C11.5839 8.02255 11.5095 8.13315 11.4587 8.25501C11.408 8.37687 11.3818 8.50757 11.3818 8.63959C11.3818 8.7716 11.408 8.9023 11.4587 9.02416C11.5095 9.14602 11.5839 9.25662 11.6776 9.34959L16.2776 13.9296C16.3714 14.0226 16.4458 14.1332 16.4965 14.255C16.5473 14.3769 16.5734 14.5076 16.5734 14.6396C16.5734 14.7716 16.5473 14.9023 16.4965 15.0242C16.4458 15.146 16.3714 15.2566 16.2776 15.3496L11.6776 19.9296C11.4893 20.1166 11.383 20.3707 11.3821 20.6361C11.3811 20.9014 11.4857 21.1563 11.6726 21.3446C11.8596 21.5329 12.1137 21.6392 12.3791 21.6401C12.6445 21.6411 12.8993 21.5366 13.0876 21.3496L17.6776 16.7596C18.2394 16.1971 18.555 15.4346 18.555 14.6396C18.555 13.8446 18.2394 13.0821 17.6776 12.5196Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php
    $titulo_certificaciones= get_field('titulo_certificaciones');
    $descripcion_certificaciones= get_field('descripcion_certificaciones');
    $listado_de_certificaciones= get_field('listado_de_certificaciones');
?>
<section class="section-certificaciones">
    <div class="container">
        <div class="part-1-cer">
                <h2 class="color-blue"><?= $titulo_certificaciones; ?></h2>
                <p class="p-subtitle color-gris"><?= $descripcion_certificaciones; ?></p>
        </div>
        <div class="part-2-cer">
        <?php if( have_rows('listado_de_certificaciones') ): ?>
            <?php while( have_rows('listado_de_certificaciones') ): the_row(); 
                $image = get_sub_field('logo_certificacion');
                $nombre_certificacion = get_sub_field('nombre_certificacion');
            ?>
                <div class="card-certificacion">
                <svg class="show-desktop"width="162" height="9" viewBox="0 0 162 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 4.28711H158" stroke="#96DAEA" stroke-width="8" stroke-linecap="round"/>
                </svg>
                <svg class="show-mobile" width="79" height="9" viewBox="0 0 79 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.85059 4.09668H74.1494" stroke="#96DAEA" stroke-width="8" stroke-linecap="round"/>
                </svg>


                    <img class="img-logo" src="<?= $image['url'] ?>" alt="">
                    <p class="color-blue"><?= $nombre_certificacion; ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>