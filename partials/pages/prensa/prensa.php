<?php
// wordpress last 4 post
$last_posts = get_posts(array(
    'posts_per_page' => 4,
    'post_type' => 'post',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status' => 'publish'
));

?>


<section>
    <div class="trabaja-head">
        <h1 class="color-white">Prensa</h1>
    </div>
</section>
<section class="section-blog bg-skyblue-1 prensa_section">
    <div class="container-left">
        <div class="col-blog-1">
            <div class="content-h2">
                <h2 class="color-blue">Noticias <p>Lo último</p>
                </h2>
                <svg class="img-sub-3" width="254" height="77" viewBox="0 0 254 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M252.368 11.7697C228.645 21.0004 164.399 18.6004 87.2298 5.86197C-26.7702 -12.9688 -24.6471 120.231 99.6914 55.2466" stroke="#004C97" stroke-width="7.38462" stroke-miterlimit="10" />
                </svg>
            </div>
            <p class="p-subtitle">Un espacio creado para ti, donde podrás encontrar consejos nutricionales y simpáticas ideas simples para aplicar en casa.</p>
            <a class="btn-ver-articulos" href="">Ver todos los artículos</a>
        </div>
        <?php if ($last_posts) : ?>
            <div class="splide splide1">
                <div class="col-blog-2 splide__track">
                    <div class="slider-blog splide__list">
                        <?php foreach ($last_posts as $post) : ?>
                            <?php
                            $post_id = $post->ID;
                            $post_title = $post->post_title;
                            $post_image_id = get_post_thumbnail_id($post);
                            $post_content = wp_strip_all_tags($post->post_content);
                            $post_date = $post->post_date;
                            $post_category = get_the_category($post_id);
                            $post_date_format = date_i18n('j \d\e F\, Y', strtotime($post_date));
                            $post_url = get_permalink($post_id);
                            ?>
                            <div class="card-blog splide__slide">
                                <div class="img-blog" style="background: url(<?= get_image_url($post_image_id) ?>)">
                                </div>

                                <?php foreach ($post_category as $category) : ?>
                                    <div class="btn-cat"><?= $category->name ?></div>
                                <?php endforeach; ?>

                                <p class="title-blog">
                                    <?= substr($post_title, 0, 50) ?>
                                    <?= strlen($post_title) > 50 ? '...' : '' ?>
                                </p>
                                <p class="text-blog">
                                    <?= substr($post_content, 0, 80) ?>...
                                </p>
                                <a href="<?= $post_url ?>">Leer más</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
</section>


<?php
// wordpress last 4 post
$category_posts = get_posts(array(
    'posts_per_page' => 4,
    'post_type' => 'post',
    'orderby' => 'title',
    'order' => 'DESC',
    'post_status' => 'publish'
));

?>
<section class="section-entradas bg-beige prensa_section2">
    <div class="container d-flex">
        <div class="row-etiquetas">
            <div class="box-cat active">Lanzamientos</div>
            <div class="box-cat">Innovación</div>
            <div class="box-cat">Novedades</div>
            <div class="box-cat">Entrevistas</div>
        </div>
        <div class="row-buscador d-flex">
            <input class="search-i" placeholder="Palabra clave" type="text">
            <a class="btn-search" href="">Buscar</a>
        </div>
    </div>
    <div class="container">

        <?php if ($category_posts) : ?>
            <div class="slider-blog">
                <?php foreach ($category_posts as $post) : ?>
                    <?php
                    $post_id = $post->ID;
                    $post_title = $post->post_title;
                    $post_image_id = get_post_thumbnail_id($post);
                    $post_content = wp_strip_all_tags($post->post_content);
                    $post_date = $post->post_date;
                    $post_category = get_the_category($post_id);
                    $post_date_format = date_i18n('j \d\e F\, Y', strtotime($post_date));
                    $post_url = get_permalink($post_id);
                    ?>
                    <div class="card-blog">
                        <div class="img-blog" style="background: url(<?= get_image_url($post_image_id) ?>)">
                        </div>
                        <?php foreach ($post_category as $category) : ?>
                            <div class="btn-cat"><?= $category->name ?></div>
                        <?php endforeach; ?>
                        <p class="title-blog"><?= substr($post_title, 0, 100) ?></p>
                        <p class="text-blog"><?= substr($post_content, 0, 100) ?>...</p>
                        <a href="<?= $post_url ?>">Leer más</a>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif ?>
    </div>
</section>