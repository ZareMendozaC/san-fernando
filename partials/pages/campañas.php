<?php
$slider_banner = get_field("slider");
$titulo = get_field("titulo");
$describcion = get_field("descripcion");
$galeria = get_field("galeria");
?>
<section class="main-banner div-ban-campanias">
    <?php foreach ($slider_banner as $item) : ?>
        <?php
        $item_image = $item["banner"];
        $item_image_url = $item_image ? $item_image["url"] : null;
        $item_url = $item["link_banner"];
        ?>
        <?php if ($item_url) : ?>
            <a href="<?= $item_url; ?>" target="_blank">
            <?php endif; ?>
            <div class="container-main banner_campanias" style="background-image: url(<?= $item_image_url; ?>)">
            </div>
            <?php if ($item_url) : ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</section>
<section class="container div-part-text">

    <div class="w-50 flex-colu">
        <h2><?= $titulo; ?></h2>
        <h2>
            <p>Campañas</p>
        </h2>
    </div>
    <div class="w-50 justificar">
        <p class="p-subtitle"><?= $describcion; ?></p>
    </div>


</section>

<section class="container mb-279">

    <div class="grid">

        <?php foreach ($galeria as $item) : ?>
            <?php
            $item_image = $item["imagen"];
            $item_video = $item["video"];
            $item_link = $item["link"];
            ?>
            <?php if ($item_image) : ?>

                <a href="<?= $item_link; ?>" target="_blank" class="grid-item">

                    <img src="<?= $item_link; ?>" alt="">

                </a>

            <?php endif; ?>
            <?php if ($item_video) : ?>

                <a href="<?= $item_link; ?>" target="_blank" class="grid-item">

                    <video src="<?= $item_link; ?>" poster="<?= $item_video; ?>" preload="metadata" controls></video>

                </a>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>