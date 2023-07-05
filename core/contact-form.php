<?php

// FORM RECLAMOS

define( 'CF7_COUNTER_LIBRO', 'cf7-counter-libro' );

function get_counter_libro(){
    $val = get_option( CF7_COUNTER_LIBRO, 0) + 1;
    $month =  date("m");
    $age =  date("Y");
	return "V-".$month.$age.sprintf("%05d", $val);
}
add_shortcode('CF7_counter_libro', 'get_counter_libro');

function increment_counter_libro($contact_form){
    $form_id = $contact_form->id();
    $form_libro_id = 805;
    if($form_id == $form_libro_id){
        $val = get_option( CF7_COUNTER_LIBRO, 0) + 1;
        update_option(CF7_COUNTER_LIBRO, $val);
    }
}

add_action('wpcf7_mail_sent', 'increment_counter_libro');


function counter_libro_ajax(){
	$counter = get_counter_libro();
    wp_send_json($counter);
}

add_action('wp_ajax_nopriv_counter_libro_ajax', 'counter_libro_ajax');
add_action('wp_ajax_counter_libro_ajax', 'counter_libro_ajax');