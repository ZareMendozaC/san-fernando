<?php
$slider_banner = get_field("slider");
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
<section class="container">

</section>