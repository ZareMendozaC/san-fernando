<?php 
function get_categories_handler() {
 try{
    $args = array(
        'post_type' => 'producto',
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'category',
                'field'    => 'name',
                'terms'    => array($_POST['post_padre']),
            ),
            array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'category',
                    'field'    => 'name',
                    'terms'    => array($_POST['post_hija']),
                ),
            ),
        ),
    );
$query = get_posts($args);
$query = array_map(function($item){
    //$item['imagen']= get_image_url($item->ID);
    return [
        'id' => $item->ID,
        "post_title" =>  $item->post_title,
        "guid" =>  $item->guid,
        "bgimage" => get_the_post_thumbnail_url($item->ID, 'full'),
      ];
},$query);
 
 return wp_send_json_success($query);
} catch (\Throwable $th) {
  return wp_send_json_error($th->getMessage(), 500);
}
}


