<?php
//$categories = get_categories();
//$request_category = get_queried_object();
//$search_query = get_search_query();
$args = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 0
  );
  $current_category = get_category( get_query_var( 'cat' ), false );
  echo '<input id="catPadre" value="'.$current_category->name.'" type="hidden">';
  
?>

<h1 class="h1-marker">Productos</h1>
<section id="post-category" class="container-full section-productos">
    <div class="general-banner-img" style="background: url('<?php echo $current_category->description; ?>');">
    </div>
    <div class="container pdt-productos">
        <h2 class="color-blue text-center">Productos</h2>
        <p class="p-subtitle-2 color-gris">Conoce todos nuestros productos de gran sabor</p>
    </div>
    <div class="row-icon-productos">
    <a href="<?php echo home_url(); ?>/category/pollo">
      <?php
      if($current_category->name=='pollo'){
        echo '<div class="card-icon active">';
      }else{
        echo '<div class="card-icon">';
      }
      ?>
            <div class="circle-icon bg-skyblue">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4796.png" alt="">
            </div>
            <p>Pollo</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/pavo">
        <?php
          if($current_category->name=='pavo'){
            echo '<div class="card-icon active">';
          }else{
            echo '<div class="card-icon">';
          }
        ?>
            <div class="circle-icon bg-skyblue">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4795.png" alt="">
            </div>
            <p>Pavo</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/embutidos">
        <?php
          if($current_category->name=='embutidos'){
            echo '<div class="card-icon active">';
          }else{
            echo '<div class="card-icon">';
          }
        ?>
            <div class="circle-icon bg-skyblue">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/sausages-1-1.png" alt="">
            </div>
            <p>Embutidos</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/congelados">
        <?php
          if($current_category->name=='congelados'){
            echo '<div class="card-icon active">';
          }else{
            echo '<div class="card-icon">';
          }
        ?>
            <div class="circle-icon bg-skyblue">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4797.png" alt="">
            </div>
            <p>Congelados</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/cerdo">
        <?php
          if($current_category->name=='cerdo'){
            echo '<div class="card-icon active">';
          }else{
            echo '<div class="card-icon">';
          }
        ?>
            <div class="circle-icon bg-skyblue">
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4792.png" alt="">
            </div>
            <p>Cerdo</p>
        </div>
    </a>
    <a href="<?php echo home_url(); ?>/category/huevo">
        <?php
          if($current_category->name=='huevo'){
            echo '<div class="card-icon active">';
          }else{
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
    <div class="container container-productos">
      
        <?php

$terms = get_terms([
    'taxonomy' => get_queried_object()->taxonomy,
    'parent'   => get_queried_object_id(),
]);

echo '<div id="lista-cate" class="lista-categorias">';
foreach ( $terms as $term) {
   // echo '<a href="' . get_term_link( $term ) . '"><div class="btn-lista-cat">' . $term->name . '</div></a>';  
   echo '<div class="btn-lista-cat" data-category="'.$term->name.'">' . $term->name . '</div>'; 
}
echo "</div>";

get_template_part('loop'); // if no sub categories exist, show the posts

?>
    </div>
    <div class="container lista-prod">
      
       
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
                <div class="card-blog">
                    <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668.png)">
                    </div>
                    <div class="btn-cat">Nutrición</div>
                    <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                    <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                    <a href="">Leer más</a>
                </div>
                <div class="card-blog">
                    <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668-1.png">
                    </div>
                    <div class="btn-cat">Nutrición</div>
                    <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                    <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                    <a href="">Leer más</a>
                </div>
                <div class="card-blog">
                    <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Mask-group-35.png)">
                    </div>
                    <div class="btn-cat">Nutrición</div>
                    <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                    <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                    <a href="">Leer más</a>
                </div>
                <div class="card-blog">
                    <div class="img-blog" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2023/06/Group-4668-1.png">
                    </div>
                    <div class="btn-cat">Nutrición</div>
                    <p class="title-blog">El buen sabor para una sopa de Pavo casera y reconfortante</p>
                    <p class="text-blog">Comer pavo es una delicia en todas sus presentaciones, pero es muy probable que…</p>
                    <a href="">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</section>