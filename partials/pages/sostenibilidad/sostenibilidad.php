<?php

$titulo_principal = get_field("titulo_principal");
$subtitulo = get_field("subtitulo");
$description = get_field("descripcion");
$icono = get_field("opcion");
$opcion_texto = get_field("opcion_texto");
$link_saber_mas = get_field("link_saber_mas");
$img = get_field("imagen");

$slider_logros = get_field("listado_de_logros");

$titulo_responsabilidad = get_field("titulo_responsabilidad");
$description_responsabilidad = get_field("descripcion_responsabilidad");
$lista_responsabilidad = get_field("listado_responsabilidad");

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

<section class="sostenebilidad-contain">

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


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1556 5" fill="none">
                    <mask id="mask0_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_2078_12866)">
                        <path d="M0.322266 1.18164L7.19629 3.54459L13.9629 1.18164L20.7295 3.54459L27.4961 1.18164L34.2628 3.54459L41.0294 1.18164L47.9034 3.54459L54.67 1.18164L61.4366 3.54459L68.2033 1.18164L74.9699 3.54459L81.7365 1.18164L88.6105 3.54459L95.3771 1.18164L102.144 3.54459L108.91 1.18164L115.677 3.54459L122.444 1.18164L129.318 3.54459L136.084 1.18164L142.851 3.54459L149.617 1.18164L156.384 3.54459L163.258 1.18164L170.025 3.54459L176.791 1.18164L183.558 3.54459L190.325 1.18164L197.199 3.54459L203.965 1.18164L210.732 3.54459L217.498 1.18164L224.265 3.54459L231.032 1.18164L237.906 3.54459L244.672 1.18164L251.439 3.54459L258.206 1.18164L264.972 3.54459L271.846 1.18164L278.613 3.54459L285.379 1.18164L292.146 3.54459L298.913 1.18164L305.679 3.54459L312.553 1.18164L319.32 3.54459L326.087 1.18164L332.853 3.54459L339.62 1.18164L346.494 3.54459L353.26 1.18164L360.027 3.54459L366.794 1.18164L373.56 3.54459L380.434 1.18164L387.201 3.54459L393.968 1.18164L400.734 3.54459L407.501 1.18164L414.375 3.54459L421.141 1.18164L427.908 3.54459L434.675 1.18164L441.549 3.54459L448.315 1.18164L455.082 3.54459L461.849 1.18164L468.615 3.54459L475.489 1.18164L482.256 3.54459L489.022 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                    <mask id="mask1_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask1_2078_12866)">
                        <path d="M489.021 1.18164L495.896 3.54459L502.662 1.18164L509.429 3.54459L516.195 1.18164L522.962 3.54459L529.729 1.18164L536.603 3.54459L543.369 1.18164L550.136 3.54459L556.902 1.18164L563.669 3.54459L570.436 1.18164L577.31 3.54459L584.076 1.18164L590.843 3.54459L597.61 1.18164L604.376 3.54459L611.143 1.18164L618.017 3.54459L624.783 1.18164L631.55 3.54459L638.317 1.18164L645.083 3.54459L651.957 1.18164L658.724 3.54459L665.491 1.18164L672.257 3.54459L679.024 1.18164L685.898 3.54459L692.664 1.18164L699.431 3.54459L706.198 1.18164L712.964 3.54459L719.731 1.18164L726.605 3.54459L733.372 1.18164L740.138 3.54459L746.905 1.18164L753.671 3.54459L760.545 1.18164L767.312 3.54459L774.079 1.18164L780.845 3.54459L787.612 1.18164L794.379 3.54459L801.253 1.18164L808.019 3.54459L814.786 1.18164L821.552 3.54459L828.319 1.18164L835.193 3.54459L841.96 1.18164L848.726 3.54459L855.493 1.18164L862.26 3.54459L869.134 1.18164L875.9 3.54459L882.667 1.18164L889.433 3.54459L896.2 1.18164L903.074 3.54459L909.841 1.18164L916.607 3.54459L923.374 1.18164L930.248 3.54459L937.015 1.18164L943.781 3.54459L950.548 1.18164L957.314 3.54459L964.188 1.18164L970.955 3.54459L977.722 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                    <mask id="mask2_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask2_2078_12866)">
                        <path d="M977.723 1.18164L984.597 3.54459L991.363 1.18164L998.13 3.54459L1004.9 1.18164L1011.66 3.54459L1018.43 1.18164L1025.3 3.54459L1032.07 1.18164L1038.84 3.54459L1045.6 1.18164L1052.37 3.54459L1059.14 1.18164L1066.01 3.54459L1072.78 1.18164L1079.54 3.54459L1086.31 1.18164L1093.08 3.54459L1099.84 1.18164L1106.72 3.54459L1113.48 1.18164L1120.25 3.54459L1127.02 1.18164L1133.78 3.54459L1140.66 1.18164L1147.43 3.54459L1154.19 1.18164L1160.96 3.54459L1167.72 1.18164L1174.6 3.54459L1181.37 1.18164L1188.13 3.54459L1194.9 1.18164L1201.67 3.54459L1208.43 1.18164L1215.31 3.54459L1222.07 1.18164L1228.84 3.54459L1235.61 1.18164L1242.37 3.54459L1249.25 1.18164L1256.01 3.54459L1262.78 1.18164L1269.55 3.54459L1276.31 1.18164L1283.08 3.54459L1289.95 1.18164L1296.72 3.54459L1303.49 1.18164L1310.25 3.54459L1317.02 1.18164L1323.89 3.54459L1330.66 1.18164L1337.43 3.54459L1344.19 1.18164L1350.96 3.54459L1357.83 1.18164L1364.6 3.54459L1371.37 1.18164L1378.13 3.54459L1384.9 1.18164L1391.78 3.54459L1398.54 1.18164L1405.31 3.54459L1412.08 1.18164L1418.95 3.54459L1425.72 1.18164L1432.48 3.54459L1439.25 1.18164L1446.02 3.54459L1452.89 1.18164L1459.66 3.54459L1466.42 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                    <mask id="mask3_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask3_2078_12866)">
                        <path d="M1466.42 1.18164L1473.3 3.54459L1480.06 1.18164L1486.83 3.54459L1493.6 1.18164L1500.36 3.54459L1507.13 1.18164L1514 3.54459L1520.77 1.18164L1527.54 3.54459L1534.3 1.18164L1541.07 3.54459L1547.84 1.18164L1554.71 3.54459L1561.48 1.18164L1568.24 3.54459L1575.01 1.18164L1581.78 3.54459L1588.54 1.18164L1595.42 3.54459L1602.18 1.18164L1608.95 3.54459L1615.72 1.18164L1622.48 3.54459L1629.36 1.18164L1636.12 3.54459L1642.89 1.18164L1649.66 3.54459L1656.42 1.18164L1663.3 3.54459L1670.06 1.18164L1676.83 3.54459L1683.6 1.18164L1690.36 3.54459L1697.13 1.18164L1704.01 3.54459L1710.77 1.18164L1717.54 3.54459L1724.31 1.18164L1731.07 3.54459L1737.95 1.18164L1744.71 3.54459L1751.48 1.18164L1758.25 3.54459L1765.01 1.18164L1771.78 3.54459L1778.65 1.18164L1785.42 3.54459L1792.19 1.18164L1798.95 3.54459L1805.72 1.18164L1812.59 3.54459L1819.36 1.18164L1826.13 3.54459L1832.89 1.18164L1839.66 3.54459L1846.53 1.18164L1853.3 3.54459L1860.07 1.18164L1866.83 3.54459L1873.6 1.18164L1880.47 3.54459L1887.24 1.18164L1894.01 3.54459L1900.77 1.18164L1907.65 3.54459L1914.41 1.18164L1921.18 3.54459L1927.95 1.18164L1934.71 3.54459L1941.59 1.18164L1948.36 3.54459L1955.12 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                </svg>

                <div class="icon-section">
                    <img class="icono-group" src="<?= $icono["url"] ?>" alt="icono">

                    <div class="text-icon">
                        <p><?= $opcion_texto ?></p>

                        <!-- <a href="<?= $link_saber_mas ?>">  se mostrara posteriormente
                            Saber más
                        </a> -->
                    </div>

                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1556 5" fill="none">
                    <mask id="mask0_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_2078_12866)">
                        <path d="M0.322266 1.18164L7.19629 3.54459L13.9629 1.18164L20.7295 3.54459L27.4961 1.18164L34.2628 3.54459L41.0294 1.18164L47.9034 3.54459L54.67 1.18164L61.4366 3.54459L68.2033 1.18164L74.9699 3.54459L81.7365 1.18164L88.6105 3.54459L95.3771 1.18164L102.144 3.54459L108.91 1.18164L115.677 3.54459L122.444 1.18164L129.318 3.54459L136.084 1.18164L142.851 3.54459L149.617 1.18164L156.384 3.54459L163.258 1.18164L170.025 3.54459L176.791 1.18164L183.558 3.54459L190.325 1.18164L197.199 3.54459L203.965 1.18164L210.732 3.54459L217.498 1.18164L224.265 3.54459L231.032 1.18164L237.906 3.54459L244.672 1.18164L251.439 3.54459L258.206 1.18164L264.972 3.54459L271.846 1.18164L278.613 3.54459L285.379 1.18164L292.146 3.54459L298.913 1.18164L305.679 3.54459L312.553 1.18164L319.32 3.54459L326.087 1.18164L332.853 3.54459L339.62 1.18164L346.494 3.54459L353.26 1.18164L360.027 3.54459L366.794 1.18164L373.56 3.54459L380.434 1.18164L387.201 3.54459L393.968 1.18164L400.734 3.54459L407.501 1.18164L414.375 3.54459L421.141 1.18164L427.908 3.54459L434.675 1.18164L441.549 3.54459L448.315 1.18164L455.082 3.54459L461.849 1.18164L468.615 3.54459L475.489 1.18164L482.256 3.54459L489.022 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                    <mask id="mask1_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask1_2078_12866)">
                        <path d="M489.021 1.18164L495.896 3.54459L502.662 1.18164L509.429 3.54459L516.195 1.18164L522.962 3.54459L529.729 1.18164L536.603 3.54459L543.369 1.18164L550.136 3.54459L556.902 1.18164L563.669 3.54459L570.436 1.18164L577.31 3.54459L584.076 1.18164L590.843 3.54459L597.61 1.18164L604.376 3.54459L611.143 1.18164L618.017 3.54459L624.783 1.18164L631.55 3.54459L638.317 1.18164L645.083 3.54459L651.957 1.18164L658.724 3.54459L665.491 1.18164L672.257 3.54459L679.024 1.18164L685.898 3.54459L692.664 1.18164L699.431 3.54459L706.198 1.18164L712.964 3.54459L719.731 1.18164L726.605 3.54459L733.372 1.18164L740.138 3.54459L746.905 1.18164L753.671 3.54459L760.545 1.18164L767.312 3.54459L774.079 1.18164L780.845 3.54459L787.612 1.18164L794.379 3.54459L801.253 1.18164L808.019 3.54459L814.786 1.18164L821.552 3.54459L828.319 1.18164L835.193 3.54459L841.96 1.18164L848.726 3.54459L855.493 1.18164L862.26 3.54459L869.134 1.18164L875.9 3.54459L882.667 1.18164L889.433 3.54459L896.2 1.18164L903.074 3.54459L909.841 1.18164L916.607 3.54459L923.374 1.18164L930.248 3.54459L937.015 1.18164L943.781 3.54459L950.548 1.18164L957.314 3.54459L964.188 1.18164L970.955 3.54459L977.722 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                    <mask id="mask2_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask2_2078_12866)">
                        <path d="M977.723 1.18164L984.597 3.54459L991.363 1.18164L998.13 3.54459L1004.9 1.18164L1011.66 3.54459L1018.43 1.18164L1025.3 3.54459L1032.07 1.18164L1038.84 3.54459L1045.6 1.18164L1052.37 3.54459L1059.14 1.18164L1066.01 3.54459L1072.78 1.18164L1079.54 3.54459L1086.31 1.18164L1093.08 3.54459L1099.84 1.18164L1106.72 3.54459L1113.48 1.18164L1120.25 3.54459L1127.02 1.18164L1133.78 3.54459L1140.66 1.18164L1147.43 3.54459L1154.19 1.18164L1160.96 3.54459L1167.72 1.18164L1174.6 3.54459L1181.37 1.18164L1188.13 3.54459L1194.9 1.18164L1201.67 3.54459L1208.43 1.18164L1215.31 3.54459L1222.07 1.18164L1228.84 3.54459L1235.61 1.18164L1242.37 3.54459L1249.25 1.18164L1256.01 3.54459L1262.78 1.18164L1269.55 3.54459L1276.31 1.18164L1283.08 3.54459L1289.95 1.18164L1296.72 3.54459L1303.49 1.18164L1310.25 3.54459L1317.02 1.18164L1323.89 3.54459L1330.66 1.18164L1337.43 3.54459L1344.19 1.18164L1350.96 3.54459L1357.83 1.18164L1364.6 3.54459L1371.37 1.18164L1378.13 3.54459L1384.9 1.18164L1391.78 3.54459L1398.54 1.18164L1405.31 3.54459L1412.08 1.18164L1418.95 3.54459L1425.72 1.18164L1432.48 3.54459L1439.25 1.18164L1446.02 3.54459L1452.89 1.18164L1459.66 3.54459L1466.42 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                    <mask id="mask3_2078_12866" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="1556" height="5">
                        <path d="M1556 0H0V4.72589H1556V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask3_2078_12866)">
                        <path d="M1466.42 1.18164L1473.3 3.54459L1480.06 1.18164L1486.83 3.54459L1493.6 1.18164L1500.36 3.54459L1507.13 1.18164L1514 3.54459L1520.77 1.18164L1527.54 3.54459L1534.3 1.18164L1541.07 3.54459L1547.84 1.18164L1554.71 3.54459L1561.48 1.18164L1568.24 3.54459L1575.01 1.18164L1581.78 3.54459L1588.54 1.18164L1595.42 3.54459L1602.18 1.18164L1608.95 3.54459L1615.72 1.18164L1622.48 3.54459L1629.36 1.18164L1636.12 3.54459L1642.89 1.18164L1649.66 3.54459L1656.42 1.18164L1663.3 3.54459L1670.06 1.18164L1676.83 3.54459L1683.6 1.18164L1690.36 3.54459L1697.13 1.18164L1704.01 3.54459L1710.77 1.18164L1717.54 3.54459L1724.31 1.18164L1731.07 3.54459L1737.95 1.18164L1744.71 3.54459L1751.48 1.18164L1758.25 3.54459L1765.01 1.18164L1771.78 3.54459L1778.65 1.18164L1785.42 3.54459L1792.19 1.18164L1798.95 3.54459L1805.72 1.18164L1812.59 3.54459L1819.36 1.18164L1826.13 3.54459L1832.89 1.18164L1839.66 3.54459L1846.53 1.18164L1853.3 3.54459L1860.07 1.18164L1866.83 3.54459L1873.6 1.18164L1880.47 3.54459L1887.24 1.18164L1894.01 3.54459L1900.77 1.18164L1907.65 3.54459L1914.41 1.18164L1921.18 3.54459L1927.95 1.18164L1934.71 3.54459L1941.59 1.18164L1948.36 3.54459L1955.12 1.18164" stroke="#004A96" stroke-width="2.14813" stroke-miterlimit="10" />
                    </g>
                </svg>
            </div>


            <figure>
                <img src="<?= $img["url"] ?>" alt="">
            </figure>

        </article>

        <article class="contain-2" id="logros">
            <h2>Logros</h2>
            <p class="description-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

            <div class="splide lista-logros">
                <div class="splide__track">
                    <ul class="splide__list list-logros-1">
                        <?php foreach ($slider_logros as $item) : ?>

                            <?php
                            $item_image = $item["icono"];
                            $item_image_url = $item_image ? $item_image["url"] : null;
                            $item_text = $item["texto"];
                            ?>
                            <?php if ($item) : ?>
                                <li class="splide__slide">
                                    <img src="<?= $item_image_url ?>" alt="iconos">
                                    <p><?= $item_text ?></p>
                                </li>

                            <?php endif; ?>

                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

            <a href="">
                Ver todos los logros
            </a>

        </article>

        <article class="contain-3">

            <div class="text-social container">
                <h2><?= $titulo_responsabilidad ?></h2>

                <p><?= $description_responsabilidad ?></p>
            </div>


            <div class="lista-social container">
                <ul id="social-carousel" class="list-social-1">
                    <?php foreach ($lista_responsabilidad as $list_res) : ?>

                        <?php
                        $item_responsabilidad_img = $list_res["icono_social"];
                        $item_responsabilidad_image_url = $item_responsabilidad_img ? $item_responsabilidad_img["url"] : null;
                        $res_titulo = $list_res["titulo_social"];
                        $res_text = $list_res["descripcion_social"];
                        ?>

                        <?php if ($list_res) : ?>
                            <li>
                                <figure>
                                    <img src="<?= $item_responsabilidad_image_url ?>" alt="icono">
                                </figure>

                                <h5><?= $res_titulo ?></h5>

                                <p><?= $res_text ?></p>

                            </li>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </ul>

            </div>


        </article>

        <article class="contain-4 container" id="sostenibilidad">
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

            <section class="inner-section-2">

                <div class="lista-ambiental">
                    <ul class="list-ambiental-1">
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

                </div>
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