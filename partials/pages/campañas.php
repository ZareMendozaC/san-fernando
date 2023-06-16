<?php
$slider_banner = get_field("slider");
$titulo = get_field("titulo");
$describcion = get_field("descripcion");
$galeria = get_field("galeria");
?>
<section class="main-banner">
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
<section class="container2 div-part-text">

        <div style="width:50%; display:flex; flex-direction:column;">
            <h2>Titulo</h2>
            <h2>
                <p>Campañas</p>
            </h2>
        </div>
        <div style="width:50%; display:flex; align-items:center;">
            <p class="p-subtitle">Sabemos que valoras lo bueno y sobre todo, las mejores oportunidades ¡aquí puedes verlas todas!</p>
        </div>


</section>

<section class="container2 space_grid">
    <div class="campania1" style="background-image: url(<?= $item_image_url; ?>"></div>
    <div class="campania2"></div>
    <div class="campania3"></div>
    <div class="campania4"></div>
    <div class="campania5"></div>

</section>