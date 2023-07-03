<?php
//$categories = get_categories();
//$request_category = get_queried_object();
//$search_query = get_search_query();
$args = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 0
);
$current_category = get_category(get_query_var('cat'), false);
echo '<input id="catPadre" value="' . $current_category->name . '" type="hidden">';
$banner_mobile = get_field('banner_mobile');
?>

<h1 class="h1-marker">Productos</h1>
<section id="post-category" class="container-full section-productos">
    <div class="general-banner-img show-desktop" style="background: url('<?php echo $current_category->description; ?>');">
    </div>
    <div class="general-banner-img show-mobile" style="background: url('<?php echo $banner_mobile['url']; ?>');">
    </div>
    <div class="container pdt-productos">
        <h2 class="color-blue text-center">Productos</h2>
        <p class="p-subtitle-2 color-gris">Conoce todos nuestros productos de gran sabor</p>
    </div>
    <div class="row-icon-productos">
        <a href="<?php echo home_url(); ?>/categoria/pollo">
            <?php
            if ($current_category->name == 'pollo') {
                echo '<div class="card-icon active">';
            } else {
                echo '<div class="card-icon">';
            }
            ?>
            <div class="circle-icon bg-skyblue">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4796.png" alt="">
            </div>
            <p>Pollo</p>
    </div>
    </a>
    <a href="<?php echo home_url(); ?>/categoria/pavo">
        <?php
        if ($current_category->name == 'pavo') {
            echo '<div class="card-icon active">';
        } else {
            echo '<div class="card-icon">';
        }
        ?>
        <div class="circle-icon bg-skyblue">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4795.png" alt="">
        </div>
        <p>Pavo</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/categoria/embutidos">
        <?php
        if ($current_category->name == 'embutidos') {
            echo '<div class="card-icon active">';
        } else {
            echo '<div class="card-icon">';
        }
        ?>
        <div class="circle-icon bg-skyblue">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/sausages-1-1.png" alt="">
        </div>
        <p>Embutidos</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/categoria/congelados">
        <?php
        if ($current_category->name == 'congelados') {
            echo '<div class="card-icon active">';
        } else {
            echo '<div class="card-icon">';
        }
        ?>
        <div class="circle-icon bg-skyblue">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4797.png" alt="">
        </div>
        <p>Congelados</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/categoria/cerdo">
        <?php
        if ($current_category->name == 'cerdo') {
            echo '<div class="card-icon active">';
        } else {
            echo '<div class="card-icon">';
        }
        ?>
        <div class="circle-icon bg-skyblue">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4792.png" alt="">
        </div>
        <p>Cerdo</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/categoria/huevo">
        <?php
        if ($current_category->name == 'huevo') {
            echo '<div class="card-icon active">';
        } else {
            echo '<div class="card-icon">';
        }
        ?>
        <div class="circle-icon bg-skyblue">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4793.png" alt="">
        </div>
        <p>Huevo</p>
        </div>
    </a>
    </div>

    <div class="container">
        <img class="line-pick" src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-14.png" alt="">
    </div>


    <!-- Begind: Filter productos by categories -->
    <div class="splide container container-productos" id="splide-subcategories">
        <?php
        $terms = get_terms([
            'taxonomy' => get_queried_object()->taxonomy,
            'parent'   => get_queried_object_id(),
        ]);
        ?>
        <div class="splide__track">
            <div id="lista-cate" class="splide__list lista-categorias">
                <?php foreach ($terms as $term) : ?>
                    <div class="splide__slide btn-lista-cat" data-id="<?php echo $term->term_id ?>" data-category="<?php echo $term->name ?>">
                        <?php echo $term->name ?>
                    </div>
                    <?= get_template_part('loop') ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- End: Filter productos by categories -->

    <div class="container lista-prod">

    </div>

    <div class="container detalle-prod">
        <div class="col-des-menu-1">
            <?php
            $list_subcat = array();
            if (!empty($cat)) $list_subcat = get_categories([
                'hide_empty' => false,
                'parent' => $cat
            ]);
            if (count($list_subcat)) :
                foreach ($list_subcat as $item_subcat) {

                    // echo $item_subcat->name.'-'.$item_subcat->term_id.'<br>';
                    $subsubcategories = get_categories([
                        'parent' => $item_subcat->term_id
                    ]);
                    foreach ($subsubcategories as $key => $item_subsubcat) {
                        $get = get_posts([
                            'post_type' => 'producto',
                            'posts_per_page' => -1,
                            'category' => $item_subsubcat->term_id
                        ]);
                        echo '<div class="col-des-menu" data-tab=' . $item_subcat->term_id . '>';
                        echo '<div class="select-title">
                      <p class="color-blue">' . $item_subsubcat->name . '</p>
                        <svg class="close-des" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.28921 15.7901C5.38217 15.8839 5.49277 15.9583 5.61463 16.009C5.73649 16.0598 5.8672 16.0859 5.99921 16.0859C6.13122 16.0859 6.26192 16.0598 6.38378 16.009C6.50564 15.9583 6.61624 15.8839 6.70921 15.7901L11.2892 11.2101C11.3822 11.1164 11.4928 11.042 11.6146 10.9912C11.7365 10.9405 11.8672 10.9143 11.9992 10.9143C12.1312 10.9143 12.2619 10.9405 12.3838 10.9912C12.5056 11.042 12.6162 11.1164 12.7092 11.2101L17.2892 15.7901C17.3822 15.8839 17.4928 15.9583 17.6146 16.009C17.7365 16.0598 17.8672 16.0859 17.9992 16.0859C18.1312 16.0859 18.2619 16.0598 18.3838 16.009C18.5056 15.9583 18.6162 15.8839 18.7092 15.7901C18.8955 15.6028 19 15.3493 19 15.0851C19 14.821 18.8955 14.5675 18.7092 14.3801L14.1192 9.79014C13.5567 9.22834 12.7942 8.91278 11.9992 8.91278C11.2042 8.91278 10.4417 9.22834 9.87921 9.79014L5.28921 14.3801C5.10296 14.5675 4.99841 14.821 4.99841 15.0851C4.99841 15.3493 5.10296 15.6028 5.28921 15.7901Z" fill="#004A96" />
                        </svg>
                    </div>';
                        echo ' <div class="select-options">';
                        foreach ($get as $key => $g) {
                            echo "<p>";
                            print_r($g->post_title);
                            echo "</p>";
                        }
                        echo '</div>';
                        echo "</div>";
                    }
                }
            endif;
            ?>
        </div>
        <div class="col-img-prod">
            <div class="etiqueta-rango" style="display: none;">
                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_880_7871)">
                        <path d="M19.3427 0.755688C19.3232 0.83857 19.3037 0.921452 19.2891 1.00433C19.0014 2.3792 17.846 3.3299 16.4418 3.33965C15.7105 3.34453 14.9841 3.33965 14.2528 3.33965C14.1845 3.33965 14.1212 3.33965 14.0383 3.33965C14.0383 3.8662 14.0383 4.37812 14.0383 4.91441C14.204 4.91441 14.3649 4.91441 14.5258 4.91441C15.7398 4.91441 16.5394 5.71398 16.5394 6.9182C16.5394 9.94095 16.5394 12.9637 16.5394 15.9865C16.5394 17.1956 15.7398 17.9951 14.5258 18C11.5079 18.0049 8.49493 18 5.47706 18C5.38443 18 5.29667 17.9951 5.20403 17.9854C4.25333 17.9171 3.48302 17.1273 3.46839 16.1717C3.45376 15.2356 3.46351 14.2996 3.46351 13.3635C3.46351 11.1988 3.46351 9.03413 3.46351 6.86945C3.46351 5.92849 4.03394 5.18256 4.91639 4.97291C5.08703 4.93391 5.26254 4.92904 5.43805 4.91928C5.61357 4.90953 5.78908 4.91928 5.96947 4.91928C5.96947 4.38787 5.96947 3.88082 5.96947 3.35428C5.90122 3.3494 5.83784 3.34453 5.77446 3.34453C5.06265 3.34453 4.35084 3.34453 3.63903 3.34453C2.0789 3.34453 0.8893 2.30607 0.674782 0.760563C0.660156 0.648429 0.660156 0.546046 0.660156 0.443662C0.669907 0.204767 0.816169 0.0438787 1.05019 0.0146262C1.11844 0.00487541 1.18182 0.00487541 1.25008 0.00487541C7.08107 0.00487541 12.9121 0.00487541 18.7479 0C19.0161 0 19.2208 0.0682557 19.3476 0.316901C19.3427 0.463164 19.3427 0.609426 19.3427 0.755688ZM15.6667 11.4572C15.6667 9.9507 15.652 8.43933 15.6715 6.93283C15.6813 6.22589 15.1547 5.78223 14.5258 5.78223C11.5079 5.79686 8.49493 5.79686 5.47706 5.78223C4.84813 5.77736 4.32646 6.22589 4.33134 6.93283C4.35084 9.9507 4.34596 12.9637 4.33134 15.9816C4.32646 16.6203 4.76525 17.1322 5.47706 17.1322C8.49493 17.1224 11.5079 17.1224 14.5258 17.1322C15.2474 17.1371 15.6813 16.6154 15.6715 15.9816C15.6472 14.4702 15.6667 12.9637 15.6667 11.4572ZM1.59136 0.887324C1.61086 0.960455 1.62061 1.00921 1.63524 1.05309C1.90338 1.90141 2.68345 2.4572 3.61953 2.4572C4.61899 2.4572 5.61357 2.45233 6.61303 2.44745C8.87522 2.44745 11.1374 2.44745 13.3996 2.44745C14.3991 2.44745 15.3936 2.4572 16.3931 2.4572C17.334 2.4572 18.1044 1.90141 18.3774 1.05309C18.392 1.00433 18.4018 0.950704 18.4164 0.887324C12.795 0.887324 7.20783 0.887324 1.59136 0.887324ZM13.1412 3.35428C11.035 3.35428 8.95322 3.35428 6.87142 3.35428C6.87142 3.87595 6.87142 4.39274 6.87142 4.90466C8.96785 4.90466 11.0496 4.90466 13.1412 4.90466C13.1412 4.38299 13.1412 3.87595 13.1412 3.35428Z" fill="#DF0002" />
                        <path d="M10.0074 15.572C7.73548 15.5768 5.88282 13.7339 5.88282 11.462C5.87795 9.19007 7.72573 7.34229 9.99766 7.33741C12.2696 7.33254 14.1223 9.18032 14.1223 11.4523C14.1271 13.7242 12.2842 15.572 10.0074 15.572ZM10.1 8.21499C8.35953 8.13698 6.83353 9.55085 6.7604 11.3109C6.68726 13.0709 8.067 14.6164 9.7929 14.6944C11.6358 14.7773 13.1618 13.4122 13.2447 11.6034C13.3227 9.79462 11.9332 8.29787 10.1 8.21499Z" fill="#DF0002" />
                        <path d="M10.0104 10.4091C10.0202 10.4091 10.0494 10.4042 10.0689 10.414C10.3225 10.5163 10.4833 10.3798 10.6394 10.2043C10.7856 10.0337 10.9514 9.88253 11.1171 9.72652C11.317 9.53638 11.5754 9.53638 11.751 9.71189C11.9167 9.88253 11.9216 10.1458 11.7412 10.3359C11.5316 10.5553 11.317 10.7699 11.0976 10.9795C11.0196 11.0526 11.0001 11.1209 11.0196 11.233C11.1464 11.8376 10.7661 12.3885 10.1616 12.4958C9.59602 12.5933 9.04998 12.1837 8.96222 11.5841C8.86959 10.9746 9.37175 10.414 10.0104 10.4091ZM10.1957 11.5012C10.1957 11.4768 10.1957 11.4524 10.1957 11.4232C10.1274 11.3793 10.0641 11.2964 9.9958 11.2964C9.9373 11.2964 9.83004 11.3988 9.83492 11.4378C9.84467 11.506 9.92267 11.6036 9.98605 11.6133C10.0494 11.6279 10.1274 11.545 10.1957 11.5012Z" fill="#DF0002" />
                    </g>
                    <defs>
                        <clipPath id="clip0_880_7871">
                            <rect width="18.6826" height="18" fill="white" transform="translate(0.660156)" />
                        </clipPath>
                    </defs>
                </svg>
                Rango de 0.9 a 1.3 kg.
            </div>

            <div class="div-img imgProductFinal">
            </div>
        </div>
        <div class="col-detail-prod">
            <p class="title titleProductFinal"></p>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tincidunt vestibulum nisl, ac faucibus neque. Proin a molestie enim. Praesent viverra scelerisque lacus, vel tincidunt leo. Praesent dapibus velit arcu.</p>
            <div id="tabs">
                <ul>
                    <li>
                        <a href="#tabs-1">
                            <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1161_24701)">
                                    <path d="M24.8405 12.0833C24.287 11.3441 23.5006 10.8131 22.6082 10.576C23.0431 9.31159 23.3645 8.01097 23.5686 6.68952C23.6353 6.20917 23.5895 5.71991 23.435 5.26024C23.2804 4.80057 23.0213 4.38304 22.678 4.04054C22.3347 3.69803 21.9165 3.43988 21.4565 3.28642C20.9965 3.13297 20.5071 3.08838 20.0269 3.15619C19.8957 3.1739 19.5061 3.23119 18.9738 3.33431C19.3034 2.60458 19.4595 1.80844 19.43 1.00827C19.4257 0.871478 19.3944 0.736886 19.338 0.61218C19.2816 0.487474 19.2012 0.375097 19.1014 0.281465C19.0015 0.187832 18.8843 0.114778 18.7562 0.0664739C18.6281 0.0181694 18.4918 -0.00443958 18.355 -6.21807e-05C18.2182 0.00431522 18.0837 0.0355933 17.9589 0.0919861C17.8342 0.148379 17.7219 0.228782 17.6282 0.328605C17.5346 0.428428 17.4615 0.545716 17.4132 0.673772C17.3649 0.801828 17.3423 0.938144 17.3467 1.07494C17.3645 1.57813 17.2612 2.07824 17.0457 2.53327C16.895 2.12666 16.6801 1.74684 16.4092 1.40827C15.9487 0.884205 15.3642 0.483949 14.7091 0.244108C14.054 0.00426647 13.3492 -0.0675059 12.6592 0.0353545C11.9026 0.0960848 11.1795 0.373059 10.5759 0.833271C9.89352 0.319931 9.06801 0.0322609 8.21441 0.0103545C7.13127 -0.0946242 6.05067 0.233865 5.2092 0.923896C4.78194 1.30428 4.43697 1.76802 4.1955 2.28661C3.95403 2.8052 3.82115 3.36769 3.80503 3.93952C3.77645 4.85517 4.04304 5.75574 4.56545 6.50827C3.92993 7.05316 3.4366 7.74457 3.12808 8.52278C2.81956 9.30099 2.70511 10.1426 2.79462 10.9749C1.97082 11.434 1.32883 12.161 0.975253 13.0353C0.621675 13.9096 0.577784 14.8785 0.850868 15.7812C1.56442 18.264 2.89251 20.5268 4.71233 22.3604C6.45817 24.0627 8.8031 25.0107 11.2415 24.9999H15.1186C17.5567 25.0109 19.9014 24.0628 21.6467 22.3604C23.4672 20.5272 24.7957 18.2643 25.5092 15.7812C25.6952 15.1555 25.7316 14.4949 25.6154 13.8526C25.4992 13.2102 25.2338 12.6042 24.8405 12.0833ZM20.3165 5.21869C20.4777 5.19694 20.6417 5.21275 20.7958 5.26489C20.9499 5.31703 21.0899 5.40409 21.2047 5.51926C21.3196 5.63443 21.4063 5.7746 21.458 5.92882C21.5097 6.08304 21.5251 6.24713 21.503 6.40827C21.2845 7.77618 20.9303 9.11892 20.4457 10.4166H17.778L19.1248 9.06973C19.3146 8.87327 19.4196 8.61014 19.4172 8.33702C19.4148 8.0639 19.3053 7.80264 19.1121 7.6095C18.919 7.41637 18.6577 7.30682 18.3846 7.30444C18.1115 7.30207 17.8484 7.40707 17.6519 7.59681L14.8321 10.4166H13.2186C13.1425 9.86874 13.1947 9.31069 13.3712 8.78646C13.5476 8.26223 13.8434 7.78616 14.2352 7.39577C14.68 6.94681 16.3852 5.72911 20.3165 5.21869ZM5.88837 4.00931C5.89463 3.72254 5.95929 3.44005 6.07839 3.1791C6.19749 2.91816 6.36853 2.68423 6.58108 2.4916C7.01084 2.17394 7.54473 2.03033 8.07587 2.08952C8.33241 2.07897 8.58829 2.1228 8.8267 2.21813C9.0651 2.31346 9.28066 2.45813 9.4592 2.64265C9.59976 2.79969 9.77187 2.92531 9.96429 3.01129C10.1567 3.09727 10.3651 3.14167 10.5759 3.1416C10.7861 3.14057 10.9938 3.09533 11.1855 3.00883C11.3772 2.92234 11.5485 2.79651 11.6884 2.63952C11.8437 2.47518 12.0302 2.34332 12.2369 2.25159C12.4436 2.15986 12.6664 2.11008 12.8925 2.10515C13.2369 2.04381 13.591 2.0688 13.9233 2.17787C14.2556 2.28694 14.5557 2.47669 14.7967 2.73015C15.1129 3.13498 15.278 3.63748 15.2634 4.15098C15.2634 4.21869 15.2634 4.3666 15.2634 4.3666C13.8806 4.86455 12.6993 5.80245 11.9009 7.0364C11.2431 6.25773 10.3679 5.69307 9.38737 5.41471C8.4068 5.13635 7.36548 5.15696 6.3967 5.4739C6.05102 5.06591 5.86978 4.54374 5.88837 4.00931ZM4.8467 10.4166C4.8467 9.5878 5.17594 8.79295 5.76199 8.2069C6.34804 7.62085 7.1429 7.2916 7.9717 7.2916C8.8005 7.2916 9.59536 7.62085 10.1814 8.2069C10.7675 8.79295 11.0967 9.5878 11.0967 10.4166H4.8467ZM23.5092 15.1968C22.8868 17.3397 21.7413 19.2942 20.1759 20.8843C18.8223 22.1994 17.0058 22.9294 15.1186 22.9166H11.2415C9.35377 22.9289 7.53677 22.1991 6.18212 20.8843C4.61658 19.2942 3.47109 17.3397 2.84878 15.1968C2.7554 14.8814 2.73729 14.5486 2.7959 14.2249C2.85452 13.9013 2.98823 13.5959 3.18628 13.3333C3.37846 13.074 3.62884 12.8636 3.91724 12.7188C4.20564 12.5741 4.52401 12.4991 4.8467 12.4999H21.5134C21.8371 12.4981 22.1567 12.5726 22.4463 12.7174C22.7359 12.8622 22.9872 13.0732 23.18 13.3333C23.3767 13.5966 23.5089 13.9023 23.5661 14.2259C23.6232 14.5496 23.6038 14.8821 23.5092 15.1968Z" fill="#004A96" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1161_24701">
                                        <rect width="25" height="25" fill="white" transform="translate(0.679688)" />
                                    </clipPath>
                                </defs>
                            </svg>Tabla nutricional</a>
                    </li>
                    <li><a href="#tabs-2"><svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1161_24707)">
                                    <path d="M19.5668 0.968662L6.86682 13.6687C6.38176 14.1511 5.99721 14.725 5.73544 15.357C5.47368 15.9891 5.33989 16.6668 5.34182 17.351V18.7499C5.34182 19.0262 5.45156 19.2911 5.64691 19.4865C5.84227 19.6818 6.10722 19.7916 6.38348 19.7916H7.78244C8.46657 19.7935 9.14429 19.6597 9.77636 19.398C10.4084 19.1362 10.9823 18.7516 11.4647 18.2666L24.1647 5.56658C24.7735 4.95634 25.1153 4.12957 25.1153 3.26762C25.1153 2.40567 24.7735 1.5789 24.1647 0.968662C23.5456 0.376885 22.7222 0.0466309 21.8658 0.0466309C21.0093 0.0466309 20.1859 0.376885 19.5668 0.968662ZM22.6918 4.09366L9.99182 16.7937C9.40445 17.3774 8.61057 17.7061 7.78244 17.7082H7.42515V17.351C7.42732 16.5228 7.75595 15.7289 8.33973 15.1416L21.0397 2.44158C21.2622 2.22903 21.5581 2.11043 21.8658 2.11043C22.1735 2.11043 22.4693 2.22903 22.6918 2.44158C22.9105 2.66087 23.0333 2.95792 23.0333 3.26762C23.0333 3.57732 22.9105 3.87438 22.6918 4.09366Z" fill="#58596C" />
                                    <path d="M24.0911 9.35313C23.8149 9.35313 23.5499 9.46287 23.3546 9.65822C23.1592 9.85357 23.0495 10.1185 23.0495 10.3948V15.625H18.8828C18.054 15.625 17.2592 15.9542 16.6731 16.5403C16.0871 17.1263 15.7578 17.9212 15.7578 18.75V22.9167H5.34115C4.51234 22.9167 3.71749 22.5874 3.13144 22.0014C2.54539 21.4153 2.21615 20.6205 2.21615 19.7917V5.20833C2.21615 4.37953 2.54539 3.58468 3.13144 2.99863C3.71749 2.41257 4.51234 2.08333 5.34115 2.08333H14.7599C15.0362 2.08333 15.3011 1.97359 15.4965 1.77824C15.6918 1.58289 15.8016 1.31793 15.8016 1.04167C15.8016 0.7654 15.6918 0.500448 15.4965 0.305097C15.3011 0.109747 15.0362 0 14.7599 0L5.34115 0C3.96032 0.00165402 2.63652 0.550919 1.66013 1.52731C0.683731 2.50371 0.134467 3.82751 0.132813 5.20833L0.132812 19.7917C0.134467 21.1725 0.683731 22.4963 1.66013 23.4727C2.63652 24.4491 3.96032 24.9983 5.34115 25H17.1568C17.8411 25.002 18.5189 24.8682 19.1512 24.6064C19.7834 24.3446 20.3575 23.9601 20.8401 23.475L23.6068 20.7063C24.0919 20.2238 24.4766 19.65 24.7385 19.0179C25.0005 18.3859 25.1345 17.7081 25.1328 17.024V10.3948C25.1328 10.1185 25.0231 9.85357 24.8277 9.65822C24.6324 9.46287 24.3674 9.35313 24.0911 9.35313ZM19.3672 22.0021C18.9485 22.4198 18.4189 22.709 17.8411 22.8354V18.75C17.8411 18.4737 17.9509 18.2088 18.1462 18.0134C18.3416 17.8181 18.6065 17.7083 18.8828 17.7083H22.9714C22.8425 18.2849 22.5537 18.8135 22.138 19.2333L19.3672 22.0021Z" fill="#58596C" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1161_24707">
                                        <rect width="25" height="25" fill="white" transform="translate(0.132812)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Ingredientes</a></li>
                </ul>
                <div id="tabs-1">
                    <div class="table-i">
                        <div class="table-1">
                            <div class="table-33 text-left"></div>
                            <div class="table-33"></div>
                            <div class="table-33 color-blue valor-diario">% valor diario *</div>
                        </div>
                        <div class="table-1">
                            <div class="table-33 text-left">Calorías</div>
                            <div class="table-33">190 Kcal</div>
                            <div class="table-33"></div>
                        </div>
                        <div class="table-1">
                            <div class="table-33 text-left">Grasa total</div>
                            <div class="table-33">11.6 g</div>
                            <div class="table-33">(15% VD)</div>
                        </div>
                        <div class="table-1">
                            <div class="table-33 text-left">Grasa saturada</div>
                            <div class="table-33">3.7 g</div>
                            <div class="table-33">(19% VD)</div>
                        </div>
                        <div class="table-1">
                            <div class="table-33 text-left">Grasa trans</div>
                            <div class="table-33">0 g</div>
                            <div class="table-33"></div>
                        </div>
                        <div class="table-1">
                            <div class="table-33 text-left">Sodio</div>
                            <div class="table-33">414 mg</div>
                            <div class="table-33">(21% VD)</div>
                        </div>
                        <div class="table-1">
                            <div class="table-33 text-left">Carbohidratos totales</div>
                            <div class="table-33">6.7 g</div>
                            <div class="table-33">(2% VD)</div>
                        </div>

                        <div class="table-1">
                            <div class="table-33 text-left">Azúcares totales</div>
                            <div class="table-33">
                                < 1 g</div>
                                    <div class="table-33">(1% VD)</div>
                            </div>

                            <div class="table-1">
                                <div class="table-33 text-left">Proteínas</div>
                                <div class="table-33">14.7 g</div>
                                <div class="table-33">(29% VD)</div>
                            </div>
                        </div>
                        <div class="list-octogonos">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/image-47-2.png" alt="">
                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/image-46.png" alt="">
                        </div>
                        <p class="leyenda">*El porcentaje del valor nutricional diario le dice qué tanto contribuye un nutriente en una porción de alimento a la dieta diaria. Se usan 2000 kcal al día como base para hacer recomendaciones generales de nutrición. Valores diarios según CODEX/FDA/UE.</p>
                    </div>
                    <div id="tabs-2">
                        <p>Carne mecánicamente deshuesada de pollo, agua, empanizador (harina de trigo fortificada según D.S. N°012-2006-SA y levadura), almidón de maíz, proteína de soya, piel de pollo, sal, saborizantes permitidos (humo y sabor a pimienta), colorante (SIN 171), ajo, cebolla, acentuador de sabor (SIN 621), conservante (SIN 202 y SIN 211), comino y pimienta.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="section-bog-bien-servido">
    <div class="container d-flex">
        <div class="col-817 center-vertical">
            <div>
                <p class="subtitle color-blue">Blog Bien Servido</p>
                <h2 class="color-blue">Encuentra la <br>solución para tu cocina con nuestro pollos</h2>
                <p class="p-subtitle color-gris">Lorem ipsum dolor sit amet, consectetur ipsum dolor adipiscing elit. Proin a justo dolor magna.</p>
                <svg width="288" height="95" viewBox="0 0 288 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M137.245 2.36188C222.581 -4.44131 284.401 20.4051 286.028 40.9626C287.803 62.7033 225.391 85.4792 146.711 91.6908C68.0302 97.9024 2.95621 85.1834 1.18146 63.4427C-0.593284 41.7021 61.8186 19.0741 140.499 12.8625" stroke="#004A96" stroke-width="2.32669" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <img class="col-739" src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4761.png" alt="">
    </div>
    <div class="container">
        <div class="col-blog-2">
            <div id="slider-blog-list" class="slider-blog">
                <?php
                $mydb = new wpdb('aprosqanet_sanfer_blog', 'Arc,Df4QCKRY', 'aprosqanet_sanfer_blog', 'localhost');
                $rows = $mydb->get_results("SELECT wp_posts.ID, wp_posts.guid, wp_posts.post_title, wp_posts.post_content , wp_postmeta.meta_key, wp_postmeta.meta_value, tabla2.guid 'url' from wp_posts INNER JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID INNER JOIN wp_postmeta ON wp_postmeta.post_id = wp_posts.ID INNER JOIN wp_posts as tabla2 ON tabla2.ID = wp_postmeta.meta_value WHERE wp_term_relationships.term_taxonomy_id=22 AND wp_postmeta.meta_key = '_thumbnail_id' ORDER BY wp_posts.post_date DESC LIMIT 4");
                foreach ($rows as $obj) {

                    echo '<div class="card-blog">
                                <div class="img-blog" data-id=' . $obj->ID . ' style="background: url(' . $obj->url . ')">
                                </div>
                                <div class="btn-cat">Recetas</div>
                                <p class="title-blog">' . $obj->post_title . '</p>
                                <a href="' . $obj->guid . '">Leer más</a>
                            </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>