<?php
    $id = $_GET['id'];

    $args = array(
        'post_type' => 'post',
        'p' => $id
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // $thumbnail_url = get_the_post_thumbnail_url();
            // the_title();
            // the_content();
            // ... y otros campos del post que necesites            
        }
        ?>
<section class="section-prensa">
    <div class="trabaja-head">
        <h1 class="color-white">Prensa</h1>
    </div>
    <div class="container d-flex content-prensa">
        <div class="prensa-1">
            <h2 class="color-blue"><?= get_the_title(); ?></h2>
            <div class="img-destacada" style="background: url(<?= get_the_post_thumbnail_url(); ?>);"></div>
            <div class="texto-prensa">
            <?= get_the_content(); ?>
            </div>
        </div>
        <div class="col-des-menu-1 prensa-2">
            <div class="col-des-menu">
                <div class="select-title">
                    <p class="color-blue">Nosotros</p>
                    <svg class="close-des" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.28921 15.7901C5.38217 15.8839 5.49277 15.9583 5.61463 16.009C5.73649 16.0598 5.8672 16.0859 5.99921 16.0859C6.13122 16.0859 6.26192 16.0598 6.38378 16.009C6.50564 15.9583 6.61624 15.8839 6.70921 15.7901L11.2892 11.2101C11.3822 11.1164 11.4928 11.042 11.6146 10.9912C11.7365 10.9405 11.8672 10.9143 11.9992 10.9143C12.1312 10.9143 12.2619 10.9405 12.3838 10.9912C12.5056 11.042 12.6162 11.1164 12.7092 11.2101L17.2892 15.7901C17.3822 15.8839 17.4928 15.9583 17.6146 16.009C17.7365 16.0598 17.8672 16.0859 17.9992 16.0859C18.1312 16.0859 18.2619 16.0598 18.3838 16.009C18.5056 15.9583 18.6162 15.8839 18.7092 15.7901C18.8955 15.6028 19 15.3493 19 15.0851C19 14.821 18.8955 14.5675 18.7092 14.3801L14.1192 9.79014C13.5567 9.22834 12.7942 8.91278 11.9992 8.91278C11.2042 8.91278 10.4417 9.22834 9.87921 9.79014L5.28921 14.3801C5.10296 14.5675 4.99841 14.821 4.99841 15.0851C4.99841 15.3493 5.10296 15.6028 5.28921 15.7901Z" fill="#004A96" />
                    </svg>
                </div>
                <div class="select-options">
                    <p>Nuestra historia</p>
                    <p>Certificaciones</p>
                    <p>Memoria</p>
                </div>
            </div>
            <div class="col-des-menu">
                <div class="select-title">
                    <p class="color-blue">Sostenibilidad</p>
                    <svg class="close-des" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.28921 15.7901C5.38217 15.8839 5.49277 15.9583 5.61463 16.009C5.73649 16.0598 5.8672 16.0859 5.99921 16.0859C6.13122 16.0859 6.26192 16.0598 6.38378 16.009C6.50564 15.9583 6.61624 15.8839 6.70921 15.7901L11.2892 11.2101C11.3822 11.1164 11.4928 11.042 11.6146 10.9912C11.7365 10.9405 11.8672 10.9143 11.9992 10.9143C12.1312 10.9143 12.2619 10.9405 12.3838 10.9912C12.5056 11.042 12.6162 11.1164 12.7092 11.2101L17.2892 15.7901C17.3822 15.8839 17.4928 15.9583 17.6146 16.009C17.7365 16.0598 17.8672 16.0859 17.9992 16.0859C18.1312 16.0859 18.2619 16.0598 18.3838 16.009C18.5056 15.9583 18.6162 15.8839 18.7092 15.7901C18.8955 15.6028 19 15.3493 19 15.0851C19 14.821 18.8955 14.5675 18.7092 14.3801L14.1192 9.79014C13.5567 9.22834 12.7942 8.91278 11.9992 8.91278C11.2042 8.91278 10.4417 9.22834 9.87921 9.79014L5.28921 14.3801C5.10296 14.5675 4.99841 14.821 4.99841 15.0851C4.99841 15.3493 5.10296 15.6028 5.28921 15.7901Z" fill="#004A96" />
                    </svg>
                </div>
                <div class="select-options">
                    <p>Responsabilidad Corporativa</p>
                    <p>Responsabilidad Social</p>
                    <p>Nuestros compromisos</p>
                    <p>Gestión Ambiental</p>
                    <p class="active">Geatión de seguridad y salud en el trabajo</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    } else {
        ?>
        <div style="width:100vw; height:100vh; display:flex; align-items:center; justify-content:center; text-align:center; ">
        <h2 class="color-blue">No se ha podido acceder<br> los detalles<br> de la noticia seleccionada</h2>
    </div>
        <?php
    }
    wp_reset_postdata();
    ?>
