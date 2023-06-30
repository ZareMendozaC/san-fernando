<?php
// wordpress last 4 post
$last_posts = get_posts(array(
    'posts_per_page' => 1,
    'post_type' => 'post',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status' => 'publish'
));

/**
 * Get post categories only post entries
 * @return array
 */
function get_categories_by_post_type($taxonomy = 'category', $post_type = 'post', $args = array())
{
    global $wpdb;
    $sql = $wpdb->prepare(
        "
            SELECT
                {$wpdb->prefix}term_taxonomy.term_id
            FROM
                {$wpdb->prefix}term_relationships
            LEFT JOIN {$wpdb->prefix}posts ON {$wpdb->prefix}term_relationships.object_id = {$wpdb->prefix}posts.ID
            LEFT JOIN {$wpdb->prefix}term_taxonomy ON {$wpdb->prefix}term_relationships.term_taxonomy_id = {$wpdb->prefix}term_taxonomy.term_taxonomy_id
            WHERE
                {$wpdb->prefix}term_taxonomy.taxonomy = '%s'
            AND {$wpdb->prefix}posts.post_type = '%s'
            GROUP BY
                term_id
        ",
        $taxonomy,
        $post_type,
    );
    $term_ids = $wpdb->get_col($sql);
    if (empty($term_ids)) {
        return array();
    }
    if (!empty($args['exclude'])) {
        $exclude = is_string($args['exclude']) ? (array) $args['exclude'] : $args['exclude'];
        $term_ids = array_filter($term_ids, function ($term_id) use ($exclude) {
            return !in_array($term_id, $exclude);
        });
    }
    $args = wp_parse_args(
        $args,
        array(
            'taxonomy' => $taxonomy,
            'hide_empty' => false,
            'include' => $term_ids,
        ),
    );
    return get_terms($args);
}

$categories = get_categories_by_post_type();

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
            <!-- <a class="btn-ver-articulos" href="">Ver todos los artículos</a> -->
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
                                <a href="<?php echo home_url(); ?>/detalle-prensa/?id=<?= $post_id; ?>">Leer más</a>
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
    'post_status' => 'publish',
    'category_name' => $_GET['categoria'] ? $_GET['categoria'] : ''
));

?>
<section class="section-entradas bg-beige prensa_section2">
    <div class="container d-flex">
        <div class="row-etiquetas">
            <?php if ($categories) : ?>
                <?php foreach ($categories as $key => $category) : ?>
                    <!-- <a href="<?= get_category_link($category->term_id) ?>" class="box-cat <?= $key == 0 ? 'active' : '' ?>"> -->
                    <a href="<?= home_url("prensa/?categoria=$category->slug") ?>" class="box-cat <?= $key == 0 ? 'active' : '' ?>">
                        <?= $category->name ?>
                    </a>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
        <form action="<?php echo home_url('/'); ?>" role="search" method="get" class="row-buscador d-flex">
            <input class="search-i" placeholder="Palabra clave" type="text">
            <button type="submit" class="btn-search" href="">Buscar</button>
        </form>
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
                        <a href="<?php echo home_url(); ?>/detalle-prensa/?id=<?= $post_id; ?>">Leer más</a>
                    </div>
                <?php endforeach; ?>

            </div>
        <?php endif ?>
    </div>
</section>