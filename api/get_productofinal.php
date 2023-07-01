<?php 
function get_productofinal_handler() {
    try{
        $my_postid = $_POST['id_product'];
        $content = get_the_title($my_postid );

        $responsedata = array(
            'id'       => $my_postid,
            "post_title" =>  $content,
            "bgimage" => get_the_post_thumbnail_url($my_postid, 'full'),
        ); 
        $result = array(); 
        $result['data'] = $responsedata;

    return wp_send_json_success($result);
    } catch (\Throwable $th) {
        return wp_send_json_error($th->getMessage(), 500);
    }
}


