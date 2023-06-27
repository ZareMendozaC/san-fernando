<?php

date_default_timezone_set('America/Mexico_City');
$fechaActual = date("d/m/Y");

?>

<section class="container-reclamaciones">
  <div class="trabaja-head">
    <h1>Libro de Reclamaciones</h1>
  </div>

  <div class="subtitle-date">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
      </svg>
      <h2><?= $fechaActual ?></h2>
    </div>
    <p>Para poder ayudarte, por favor, bríndanos tus datos personales</p>
  </div>

  <div class="formulario-recla">
    <?php echo do_shortcode('[contact-form-7 id="435" title="Libro de Reclamaciones"]'); ?>
  </div>



</section>