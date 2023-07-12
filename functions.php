<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

require(__DIR__ . "/core/index.php");

WpDevKit::load_env();

new WpDevKit();


add_filter( "gscf7_special_mail_tags", "add_custom_mail_tag", 10, 2 );
 
function add_custom_mail_tag( $custom_mail_tags, $form_id ) {
 
$custom_mail_tags[] = "_datetime";
$custom_mail_tags[] = "_year";
 
return $custom_mail_tags;
}
 
add_filter( "wpcf7_special_mail_tags", function( $output, $name, $html ) {
	
	date_default_timezone_set('America/Lima');
	if ( $name === "_datetime" ) {
		$date_time = date('d/m/Y h:i:s');
		return $date_time;
	}
	if ( $name === "_year" ) {
		$year = date('Y');
		return $year;
	}
return $output;
}, 10, 3 );