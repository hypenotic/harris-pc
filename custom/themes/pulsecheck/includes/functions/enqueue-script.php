<?php

/**
* Enqueue scripts
*/

function my_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('swiper-jq', get_template_directory_uri() . '/dist/js/swiper.jquery.min.js', array('jquery'), '', true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/dist/js/swiper.min.js', array('jquery'), '', true);
  	wp_enqueue_script('app', get_template_directory_uri() . '/dist/js/app.min.js', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );

?>