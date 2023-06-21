<?php
// INFO
$nombre_nosotros = get_field("nombre_nosotros");
$img_nosotros = get_field("imagen_principal_nosotros");
$titulo_nosotros = get_field("titulo_nosotros");
$descripcion_nosotros = get_field("descripcion_nosotros");
$url_boton_trabaja = get_field("url_boton");
$url_politicas_trabaja = get_field("link_politicas_de_privacidad");
// TIME LINE
$listado_timeline = get_field("listado_timeline");
// MISION VISION
$titulo_mision = get_field("titulo_mision");
$descripcion_mision = get_field("descripcion_mision");
$titulo_vision = get_field("titulo_vision");
$descripcion_vision = get_field("descripcion_vision");
// VALORES
$listado_de_valores = get_field("listado_de_valores");
// CONOCE MAS
$titulo_conoce = get_field("titulo_conoce");
$descripcion_conoce = get_field("descripcion_conoce");
$lista_conoce = get_field("lista_conoce");
// POLITICAS
$titulo_politicas = get_field("titulo_politicas");
$descripcion_politicas = get_field("descripcion_politicas");
$archivos = get_field("archivos");
// CERTIFICACIONES
// $titulo_certificaciones = get_field('titulo_certificaciones');
// $descripcion_certificaciones = get_field('descripcion_certificaciones');
// $listado_de_certificaciones = get_field('listado_de_certificaciones');
?>

<section class="section_info_nosotros ">
    <div class="head_nosotros">
        <h1><?= $nombre_nosotros; ?></h1>
    </div>

    <!-- <div class="img_nosotros" style="background-image: url(<?= $img_nosotros['url'] ?>);"></div> -->
    <img src="<?= $img_nosotros['url'] ?>" alt="" class="img_nosotros">
    <h2 class="color-blue"><?= $titulo_nosotros; ?></h2>
    <p class="p-subtitle p_dsc"><?= $descripcion_nosotros; ?></p>

</section>
<section class="section_time_line container">
<!-- TIME LINE -->
</section>
<section class="section_MV_valores container">

    <div class="container_misionvision">
        <div class="div_misionvision">
            <div class="div_inside">
                <p class="titulo_box color-blue"><?= $titulo_mision; ?></p>
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M53.4274 27.0184C53.4274 41.6175 41.5628 53.4821 26.9637 53.4821C12.3646 53.4821 0.5 41.6175 0.5 27.0184C0.5 12.4192 12.3646 0.554688 26.9637 0.554688C28.5736 0.554688 30.2055 0.709059 31.7713 0.995749C32.9621 1.21628 33.756 2.36304 33.5355 3.55391C33.315 4.74477 32.1682 5.53868 30.9773 5.31815C29.6762 5.07557 28.3089 4.9653 26.9637 4.9653C14.8124 4.9653 4.91061 14.8671 4.91061 27.0184C4.91061 39.1696 14.8124 49.0714 26.9637 49.0714C39.1149 49.0714 49.0168 39.1696 49.0168 27.0184C49.0168 25.6731 48.8844 24.3279 48.6639 23.0047C48.4434 21.8138 49.2373 20.6671 50.4282 20.4466C51.6411 20.226 52.7658 21.0199 52.9863 22.2108C53.273 23.7766 53.4274 25.4085 53.4274 27.0184ZM28.8602 13.9188C30.0732 14.0953 31.1758 13.2573 31.3522 12.0443C31.5287 10.8314 30.6907 9.72876 29.4777 9.55234C28.6397 9.44207 27.8017 9.37592 26.9637 9.37592C17.2383 9.37592 9.32123 17.293 9.32123 27.0184C9.32123 36.7438 17.2383 44.6608 26.9637 44.6608C36.6891 44.6608 44.6061 36.7438 44.6061 27.0184C44.6061 26.1804 44.54 25.3423 44.4297 24.5043C44.2533 23.2914 43.1506 22.4534 41.9377 22.6298C40.7248 22.8062 39.8868 23.9089 40.0632 25.1218C40.1514 25.7393 40.1955 26.3788 40.1955 27.0184C40.1955 34.3179 34.2632 40.2502 26.9637 40.2502C19.6641 40.2502 13.7318 34.3179 13.7318 27.0184C13.7318 19.7188 19.6641 13.7865 26.9637 13.7865C27.6032 13.7865 28.2428 13.8306 28.8602 13.9188ZM24.2071 20.623C23.3911 19.7188 22.0017 19.6306 21.0976 20.4466C19.2231 22.1226 18.1645 24.5264 18.1645 27.0184C18.1645 31.8921 22.112 35.8396 26.9857 35.8396C29.4998 35.8396 31.8815 34.759 33.5576 32.9065C34.3735 32.0024 34.2853 30.613 33.3811 29.7971C32.477 28.9811 31.0876 29.0693 30.2716 29.9735C29.4336 30.8997 28.2428 31.451 26.9857 31.451C24.5599 31.451 22.5751 29.4663 22.5751 27.0404C22.5751 25.7834 23.1044 24.5925 24.0527 23.7545C24.9569 22.9386 25.0451 21.5492 24.2291 20.645L24.2071 20.623ZM27.6253 23.2694C26.7652 24.1294 26.7652 25.5188 27.6253 26.3788C28.0663 26.8199 28.6177 27.0184 29.191 27.0184C29.7644 27.0184 30.3158 26.7978 30.7568 26.3788L41.1438 15.9918H46.8556C47.451 15.9918 48.0023 15.7493 48.4213 15.3523L52.8319 10.9417C53.4715 10.3021 53.6479 9.35386 53.3171 8.5379C52.9863 7.72193 52.1703 7.17061 51.2882 7.17061H46.8776V2.75999C46.8776 1.87787 46.3483 1.06191 45.5103 0.731112C44.6723 0.378263 43.7461 0.576741 43.1065 1.21628L38.6959 5.62689C38.2769 6.0459 38.0564 6.59723 38.0564 7.19266V12.9044L27.6694 23.2914L27.6253 23.2694Z" fill="#DF0002" />
                </svg>

            </div>

            <p class="texto_box "><?= $descripcion_mision; ?></p>
        </div>
        <div class="div_misionvision">
            <div class="div_inside">
                <p class="titulo_box color-blue"><?= $titulo_vision; ?></p>
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M53.4274 27.0184C53.4274 41.6175 41.5628 53.4821 26.9637 53.4821C12.3646 53.4821 0.5 41.6175 0.5 27.0184C0.5 12.4192 12.3646 0.554688 26.9637 0.554688C28.5736 0.554688 30.2055 0.709059 31.7713 0.995749C32.9621 1.21628 33.756 2.36304 33.5355 3.55391C33.315 4.74477 32.1682 5.53868 30.9773 5.31815C29.6762 5.07557 28.3089 4.9653 26.9637 4.9653C14.8124 4.9653 4.91061 14.8671 4.91061 27.0184C4.91061 39.1696 14.8124 49.0714 26.9637 49.0714C39.1149 49.0714 49.0168 39.1696 49.0168 27.0184C49.0168 25.6731 48.8844 24.3279 48.6639 23.0047C48.4434 21.8138 49.2373 20.6671 50.4282 20.4466C51.6411 20.226 52.7658 21.0199 52.9863 22.2108C53.273 23.7766 53.4274 25.4085 53.4274 27.0184ZM28.8602 13.9188C30.0732 14.0953 31.1758 13.2573 31.3522 12.0443C31.5287 10.8314 30.6907 9.72876 29.4777 9.55234C28.6397 9.44207 27.8017 9.37592 26.9637 9.37592C17.2383 9.37592 9.32123 17.293 9.32123 27.0184C9.32123 36.7438 17.2383 44.6608 26.9637 44.6608C36.6891 44.6608 44.6061 36.7438 44.6061 27.0184C44.6061 26.1804 44.54 25.3423 44.4297 24.5043C44.2533 23.2914 43.1506 22.4534 41.9377 22.6298C40.7248 22.8062 39.8868 23.9089 40.0632 25.1218C40.1514 25.7393 40.1955 26.3788 40.1955 27.0184C40.1955 34.3179 34.2632 40.2502 26.9637 40.2502C19.6641 40.2502 13.7318 34.3179 13.7318 27.0184C13.7318 19.7188 19.6641 13.7865 26.9637 13.7865C27.6032 13.7865 28.2428 13.8306 28.8602 13.9188ZM24.2071 20.623C23.3911 19.7188 22.0017 19.6306 21.0976 20.4466C19.2231 22.1226 18.1645 24.5264 18.1645 27.0184C18.1645 31.8921 22.112 35.8396 26.9857 35.8396C29.4998 35.8396 31.8815 34.759 33.5576 32.9065C34.3735 32.0024 34.2853 30.613 33.3811 29.7971C32.477 28.9811 31.0876 29.0693 30.2716 29.9735C29.4336 30.8997 28.2428 31.451 26.9857 31.451C24.5599 31.451 22.5751 29.4663 22.5751 27.0404C22.5751 25.7834 23.1044 24.5925 24.0527 23.7545C24.9569 22.9386 25.0451 21.5492 24.2291 20.645L24.2071 20.623ZM27.6253 23.2694C26.7652 24.1294 26.7652 25.5188 27.6253 26.3788C28.0663 26.8199 28.6177 27.0184 29.191 27.0184C29.7644 27.0184 30.3158 26.7978 30.7568 26.3788L41.1438 15.9918H46.8556C47.451 15.9918 48.0023 15.7493 48.4213 15.3523L52.8319 10.9417C53.4715 10.3021 53.6479 9.35386 53.3171 8.5379C52.9863 7.72193 52.1703 7.17061 51.2882 7.17061H46.8776V2.75999C46.8776 1.87787 46.3483 1.06191 45.5103 0.731112C44.6723 0.378263 43.7461 0.576741 43.1065 1.21628L38.6959 5.62689C38.2769 6.0459 38.0564 6.59723 38.0564 7.19266V12.9044L27.6694 23.2914L27.6253 23.2694Z" fill="#DF0002" />
                </svg>
            </div>
            <p class="texto_box "><?= $descripcion_vision; ?></p>
        </div>
    </div>
    <div class="container_valores">
        <div class="div_valores">
            <div class="div_inside">
                <p class="titulo_box color-blue">Valores</p>
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M53.4274 27.0184C53.4274 41.6175 41.5628 53.4821 26.9637 53.4821C12.3646 53.4821 0.5 41.6175 0.5 27.0184C0.5 12.4192 12.3646 0.554688 26.9637 0.554688C28.5736 0.554688 30.2055 0.709059 31.7713 0.995749C32.9621 1.21628 33.756 2.36304 33.5355 3.55391C33.315 4.74477 32.1682 5.53868 30.9773 5.31815C29.6762 5.07557 28.3089 4.9653 26.9637 4.9653C14.8124 4.9653 4.91061 14.8671 4.91061 27.0184C4.91061 39.1696 14.8124 49.0714 26.9637 49.0714C39.1149 49.0714 49.0168 39.1696 49.0168 27.0184C49.0168 25.6731 48.8844 24.3279 48.6639 23.0047C48.4434 21.8138 49.2373 20.6671 50.4282 20.4466C51.6411 20.226 52.7658 21.0199 52.9863 22.2108C53.273 23.7766 53.4274 25.4085 53.4274 27.0184ZM28.8602 13.9188C30.0732 14.0953 31.1758 13.2573 31.3522 12.0443C31.5287 10.8314 30.6907 9.72876 29.4777 9.55234C28.6397 9.44207 27.8017 9.37592 26.9637 9.37592C17.2383 9.37592 9.32123 17.293 9.32123 27.0184C9.32123 36.7438 17.2383 44.6608 26.9637 44.6608C36.6891 44.6608 44.6061 36.7438 44.6061 27.0184C44.6061 26.1804 44.54 25.3423 44.4297 24.5043C44.2533 23.2914 43.1506 22.4534 41.9377 22.6298C40.7248 22.8062 39.8868 23.9089 40.0632 25.1218C40.1514 25.7393 40.1955 26.3788 40.1955 27.0184C40.1955 34.3179 34.2632 40.2502 26.9637 40.2502C19.6641 40.2502 13.7318 34.3179 13.7318 27.0184C13.7318 19.7188 19.6641 13.7865 26.9637 13.7865C27.6032 13.7865 28.2428 13.8306 28.8602 13.9188ZM24.2071 20.623C23.3911 19.7188 22.0017 19.6306 21.0976 20.4466C19.2231 22.1226 18.1645 24.5264 18.1645 27.0184C18.1645 31.8921 22.112 35.8396 26.9857 35.8396C29.4998 35.8396 31.8815 34.759 33.5576 32.9065C34.3735 32.0024 34.2853 30.613 33.3811 29.7971C32.477 28.9811 31.0876 29.0693 30.2716 29.9735C29.4336 30.8997 28.2428 31.451 26.9857 31.451C24.5599 31.451 22.5751 29.4663 22.5751 27.0404C22.5751 25.7834 23.1044 24.5925 24.0527 23.7545C24.9569 22.9386 25.0451 21.5492 24.2291 20.645L24.2071 20.623ZM27.6253 23.2694C26.7652 24.1294 26.7652 25.5188 27.6253 26.3788C28.0663 26.8199 28.6177 27.0184 29.191 27.0184C29.7644 27.0184 30.3158 26.7978 30.7568 26.3788L41.1438 15.9918H46.8556C47.451 15.9918 48.0023 15.7493 48.4213 15.3523L52.8319 10.9417C53.4715 10.3021 53.6479 9.35386 53.3171 8.5379C52.9863 7.72193 52.1703 7.17061 51.2882 7.17061H46.8776V2.75999C46.8776 1.87787 46.3483 1.06191 45.5103 0.731112C44.6723 0.378263 43.7461 0.576741 43.1065 1.21628L38.6959 5.62689C38.2769 6.0459 38.0564 6.59723 38.0564 7.19266V12.9044L27.6694 23.2914L27.6253 23.2694Z" fill="#DF0002" />
                </svg>
            </div>
            <ul>
                <?php foreach ($listado_de_valores as $valor) : ?>
                    <?php
                    $nombre_valor = $valor["nombre_valor"];
                    $texto_valor = $valor["texto_valor"];
                    ?>
                    <li>
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0789 6.56042C19.4831 6.96979 19.4789 7.62917 19.0685 8.03333L13.0341 13.9781C12.632 14.3812 12.1008 14.5823 11.5685 14.5823C11.0362 14.5823 10.5008 14.3792 10.0935 13.9729L7.19557 11.1646C6.78203 10.7635 6.77161 10.1042 7.17266 9.69167C7.5737 9.27812 8.23307 9.26875 8.64557 9.66875L11.5549 12.4885L17.606 6.55C18.0185 6.14687 18.6758 6.15 19.0789 6.56042ZM25.6289 4.16667V16.6667C25.6289 18.9646 23.7602 20.8333 21.4622 20.8333H18.4914L14.4841 24.1458C14.107 24.4812 13.6247 24.65 13.1372 24.65C12.6414 24.65 12.1424 24.475 11.7445 24.1219L7.84036 20.8333H4.79557C2.49766 20.8333 0.628906 18.9646 0.628906 16.6667V4.16667C0.628906 1.86875 2.49766 0 4.79557 0H21.4622C23.7602 0 25.6289 1.86875 25.6289 4.16667ZM23.5456 4.16667C23.5456 3.01771 22.6112 2.08333 21.4622 2.08333H4.79557C3.64661 2.08333 2.71224 3.01771 2.71224 4.16667V16.6667C2.71224 17.8156 3.64661 18.75 4.79557 18.75H8.22161C8.46745 18.75 8.70495 18.8365 8.89349 18.9948L13.1091 22.5469L17.4529 18.9885C17.6404 18.8344 17.8747 18.75 18.1174 18.75H21.4633C22.6122 18.75 23.5466 17.8156 23.5466 16.6667L23.5456 4.16667Z" fill="#DF0002" />
                        </svg>
                        <div>
                            <p class="titulo_box2 color-blue"><?= $nombre_valor; ?></p>
                            <p class="texto_box"><?= $texto_valor; ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</section>
<section class="section_conoce">
    <div class="div_conoce">
        <h2 class="color-white"><?= $titulo_conoce; ?></h2>
        <p class="p-subtitle justificar color-white p_divConoce"><?= $descripcion_conoce; ?></p>
    </div>
    <div class="div_conoce_list">
        <?php foreach ($lista_conoce as $conoce) : ?>
            <?php
            $img_conoce = $conoce["imagen_de_fondo"];
            $ico_conoce = $conoce["icono"];
            $nombre_conoce = $conoce["titulo"];
            $texto_conoce = $conoce["texto"];
            $btn_conoce = $conoce["texto_boton"];
            $link_conoce = $conoce["link_boton"];
            ?>
            <div class="card_conoce hidden-mobile">
                <img src="<?= $ico_conoce['url']; ?>" alt="<?= $nombre_conoce; ?>" class="ico_card">
                <p class="titulo_card color-blue"><?= $nombre_conoce; ?></p>
                <p class="texto_card color-gris"><?= $texto_conoce; ?></p>
                <a class="btn-rojo" href="<?= $link_conoce; ?>" target="_blank"><?= $btn_conoce; ?></a>

            </div>
            <div class="card_conoce_mov hidden-desktop show-mobile" style="background-image: url('<?= $img_conoce['url']; ?>')">

                <p class="titulo_card color-white"><?= $nombre_conoce; ?></p>
                <div class="div_link_card">
                    <p class="texto_card color-white"><?= $btn_conoce; ?></p>
                    <a href="<?= $link_conoce; ?>">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.128906" y="0.0893555" width="28" height="28" rx="14" fill="#DF0002" />
                            <path d="M17.5287 11.9694L12.9387 7.37942C12.7513 7.19316 12.4979 7.08862 12.2337 7.08862C11.9695 7.08862 11.7161 7.19316 11.5287 7.37942C11.435 7.47238 11.3606 7.58298 11.3098 7.70484C11.259 7.8267 11.2329 7.9574 11.2329 8.08942C11.2329 8.22143 11.259 8.35213 11.3098 8.47399C11.3606 8.59585 11.435 8.70645 11.5287 8.79942L16.1287 13.3794C16.2224 13.4724 16.2968 13.583 16.3476 13.7048C16.3984 13.8267 16.4245 13.9574 16.4245 14.0894C16.4245 14.2214 16.3984 14.3521 16.3476 14.474C16.2968 14.5959 16.2224 14.7065 16.1287 14.7994L11.5287 19.3794C11.3404 19.5664 11.2341 19.8205 11.2332 20.0859C11.2322 20.3512 11.3367 20.6061 11.5237 20.7944C11.7107 20.9827 11.9648 21.089 12.2302 21.09C12.4955 21.0909 12.7504 20.9864 12.9387 20.7994L17.5287 16.2094C18.0905 15.6469 18.4061 14.8844 18.4061 14.0894C18.4061 13.2944 18.0905 12.5319 17.5287 11.9694Z" fill="white" />
                        </svg></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="section_politicas container">
    <h2><?= $titulo_politicas; ?></h2>
    <p class="p-subtitle color-gris"><?= $descripcion_politicas; ?></p>

    <div class="div_btn_politicas">
        <?php foreach ($archivos as $archivo) : ?>
            <?php
            $texto_boton_politicas = $archivo["texto_boton_politicas"];
            $url_boton_politicas = $archivo["url_boton_politicas"];
            ?>
            <a class="btn-azul" href="<?= $url_boton_politicas; ?>"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.5 11.0449L12.5 14.0449L22.5 4.04492" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M21.5 12.0449V19.0449C21.5 19.5754 21.2893 20.0841 20.9142 20.4591C20.5391 20.8342 20.0304 21.0449 19.5 21.0449H5.5C4.96957 21.0449 4.46086 20.8342 4.08579 20.4591C3.71071 20.0841 3.5 19.5754 3.5 19.0449V5.04492C3.5 4.51449 3.71071 4.00578 4.08579 3.63071C4.46086 3.25564 4.96957 3.04492 5.5 3.04492H16.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg><?= $texto_boton_politicas; ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php
$titulo_certificaciones = get_field('titulo_certificaciones', 17);
$descripcion_certificaciones = get_field('descripcion_certificaciones', 17);
$listado_de_certificaciones = get_field('listado_de_certificaciones', 17);
?>
<section class="section-certificaciones">
    <div class="container">
        <div class="part-1-cer">
            <h2 class="color-blue"><?= $titulo_certificaciones; ?></h2>
            <p class="p-subtitle color-gris"><?= $descripcion_certificaciones; ?></p>
        </div>
        <div class="part-2-cer">
            <?php if (have_rows('listado_de_certificaciones', 17)) : ?>
                <?php while (have_rows('listado_de_certificaciones', 17)) : the_row();
                    $image = get_sub_field('logo_certificacion');
                    $nombre_certificacion = get_sub_field('nombre_certificacion');
                    $detalle = get_sub_field('detalle');
                ?>
                    <div class="card-certificacion">
                        <div class="data-certificacion"><?= $detalle; ?></div>
                        <svg class="show-desktop" width="162" height="9" viewBox="0 0 162 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4.28711H158" stroke="#96DAEA" stroke-width="8" stroke-linecap="round" />
                        </svg>
                        <svg class="show-mobile" width="79" height="9" viewBox="0 0 79 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.85059 4.09668H74.1494" stroke="#96DAEA" stroke-width="8" stroke-linecap="round" />
                        </svg>
                        <img class="img-logo" src="<?= $image['url'] ?>" alt="">
                        <p class="color-blue"><?= $nombre_certificacion; ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="modal-certificacion">
                <svg class="close-certificacion" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.6504 7.34999C22.8004 1.49999 13.2004 1.49999 7.35039 7.34999C1.50039 13.2 1.50039 22.8 7.35039 28.65C13.2004 34.5 22.6504 34.5 28.5004 28.65C34.3504 22.8 34.5004 13.2 28.6504 7.34999ZM22.2004 24.3L18.0004 20.1L13.8004 24.3L11.7004 22.2L15.9004 18L11.7004 13.8L13.8004 11.7L18.0004 15.9L22.2004 11.7L24.3004 13.8L20.1004 18L24.3004 22.2L22.2004 24.3Z" fill="#004A96" />
                </svg>
                <div id="dCertificacion"></div>

            </div>
        </div>
    </div>
</section>