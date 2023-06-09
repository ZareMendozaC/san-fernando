<?php
$slider_banner = get_field("slider");
$titulo = get_field("titulo");
$describcion = get_field("descripcion");
$galeria = get_field("galeria");
?>
<section class=" div-ban-campanias">
    <?php foreach ($slider_banner as $item) : ?>
        <?php
        $image = get_data('banner', $item);;
        $image_mobile = get_data('banner_mobile', $item);
        $item_url = $item["link_banner"];
        ?>
        <a href="<?= default_value($item_url, '#') ?>">
            <div class="container-main banner_campanias" style="--bg-image: url(<?= get_image_url($image); ?>); --bg-mobile-image: url(<?= get_image_url($image_mobile); ?>);">
            </div>
        </a>
    <?php endforeach; ?>
</section>
<section class="container div-part-text">

    <div class="subdiv_part_text">
        <h2 class="color-blue"><?= $titulo; ?></h2>
        <svg class="img_part_text" width="162" height="49" viewBox="0 0 162 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M159.019 4.47941C156.786 5.47702 153.888 6.1896 150.421 6.66465C141.014 7.89979 131.086 8.23233 120.92 7.66226C110.754 6.99719 97.7847 5.71455 81.9654 3.95685L77.6425 3.38679C65.2436 1.91413 55.6475 0.916517 48.7593 0.441465C41.871 -0.033588 36.0279 0.0139173 30.9923 0.678991C7.42969 3.81434 -0.883732 17.0683 0.683941 28.9446C1.49153 34.9303 5.43447 40.3934 11.4676 43.9563C18.0234 47.5667 25.9092 48.7543 34.9827 47.5667C39.2582 46.9966 44.2938 45.5715 50.3744 43.4337C56.4076 41.1535 61.1581 38.5407 64.6735 35.6904L62.3458 30.5598C59.3054 33.0776 54.9349 35.6429 49.1393 38.0181C43.3437 40.3934 38.3081 41.8185 34.2702 42.3411C17.8808 44.4788 7.09715 37.068 5.90952 28.2795C5.24445 23.3865 6.85962 18.446 10.47 14.8831C15.078 10.18 22.1563 7.23472 31.7049 5.99958C36.4554 5.38201 42.061 5.38201 48.7118 5.85706C55.3625 6.33212 64.816 7.23472 77.0724 8.61237C93.8893 10.6551 108.141 11.9852 119.542 12.7453C131.086 13.4579 142.012 13.1729 152.368 11.7952C155.741 11.3677 158.924 10.6076 161.822 9.41996L159.019 4.47941Z" fill="#004A96" />
        </svg>
    </div>
</section>

<section class="container mb-279">

    <div class="grid">

        <?php foreach ($galeria as $key => $item) : ?>
            <?php
            $item_image = $item["imagen"];
            $item_video = $item["video"];
            $item_video_url = $item_video ? $item_video["1"] : null;
            $item_link = $item["link"];
            ?>
            <?php if ($item_image) : ?>
                <?php if ($item_video) : ?>
                    <div onclick="video_modal_<?= $key ?>.showModal()" class="grid-item bg-video" style="cursor: pointer;">
                        <?php if ($item_image) : ?>
                            <?= render_image($item_image['ID']) ?>
                        <?php endif; ?>
                        <div class="hover-video">
                            <svg width="99" height="99" viewBox="0 0 99 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="49.4946" cy="49.3666" r="48.6821" fill="#004A96"/>
                            <path d="M68.9742 44.2101L43.7271 29.6235C43.0054 29.1966 42.1835 28.9683 41.345 28.9619C40.0269 28.9619 38.7627 29.4855 37.8307 30.4175C36.8986 31.3496 36.375 32.6137 36.375 33.9319V65.2371C36.3752 66.1118 36.6097 66.9705 37.0541 67.7239C37.4985 68.4773 38.1366 69.0979 38.9021 69.5212C39.6676 69.9444 40.5325 70.1549 41.4069 70.1307C42.2813 70.1065 43.1332 69.8486 43.8741 69.3836L69.1506 53.4149C69.9365 52.923 70.5817 52.236 71.0231 51.4206C71.4645 50.6053 71.6872 49.6895 71.6694 48.7625C71.6516 47.8355 71.394 46.929 70.9217 46.1311C70.4493 45.3333 69.7784 44.6715 68.9742 44.2101Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                <?php elseif ($item_link) : ?>
                    <a href="<?= default_value($item_link, '#') ?>" target="<?= default_value($item_link ? '_blank' : null, '_self') ?>" rel="nofollow" class="grid-item">
                        <?php if ($item_image) : ?>
                            <?= render_image($item_image['ID']) ?>
                        <?php endif; ?>
                    </a>
                <?php else : ?>
                    <div class="grid-item">
                        <?php if ($item_image) : ?>
                            <?= render_image($item_image['ID']) ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            <?php endif; ?>
            <?php if ($item_video) : ?>
                <!-- Open the modal using ID.showModal() method -->
                <dialog id="video_modal_<?= $key; ?>" class="video-modal">
                    <?= $item_video; ?>
                    <form method="dialog" class="modal-close">
                        <button class="btn">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.4656 6.25391L6.46558 18.2539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.46558 6.25391L18.4656 18.2539" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                </dialog>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>