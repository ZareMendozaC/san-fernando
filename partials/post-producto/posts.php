<?php
$categories = get_categories();
//$request_category = get_queried_object();
//$search_query = get_search_query();
$args = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 0
  );
  $categories = get_categories($args);
?>

<pre><?php var_dump( $categories); ?></pre>
<section>
    <h1>hola mundo</h1>
    <?php 
    foreach ($categories as $post_cat) {
     wp_get_attachment_image( $post_cat->term_id );
    }
    ?>
</section>