<section>
    <div class="politicas-head zigzag">
        <?php $titulo_politicas = get_field("titulo_principal"); ?>
        <h1 class="color-white"><?php echo $titulo_politicas; ?></h1>
    </div>

    <div class="text-politicas container">
        <?php $text_politicas = get_field("texto_politicas"); ?>

        <?php echo $text_politicas; ?>
    </div>
</section>