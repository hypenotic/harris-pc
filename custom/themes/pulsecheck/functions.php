<?php
//Load custom functions
require_once('includes/functions/enqueue-script.php');
// require_once('includes/functions/enqueue-style.php');
require_once('includes/functions/add-menu-support.php');
require_once('includes/functions/register-menu.php');
// Load MetaBox.io files
require_once('includes/metabox/cpt-page.php');
require_once('includes/metabox/cpt-product.php');
require_once('includes/metabox/cpt-case-study.php');
require_once('includes/metabox/cpt-team-members.php');
require_once('includes/metabox/cpt-client-partner.php');
// Direct
function my_styles() {
	wp_enqueue_style( 'material', 'https://fonts.googleapis.com/icon?family=Material+Icons', false);
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,700i|Titillium+Web:300,400,600,700', false );
	wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
	wp_enqueue_style( 'animate' );
	wp_register_style('awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style( 'awesome' );
	wp_register_style('swiper', get_template_directory_uri() . '/dist/css/swiper.min.css');
	wp_enqueue_style( 'swiper' );
	wp_register_style('style', get_template_directory_uri() . '/dist/css/style.css');
 	wp_enqueue_style( 'style' );
}
add_action('wp_enqueue_scripts', 'my_styles');
?>