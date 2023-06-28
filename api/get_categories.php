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
$query = new WP_Query($args);
 
 return wp_send_json_success($query);
} catch (\Throwable $th) {
  return wp_send_json_error($th->getMessage(), 500);
}
}


