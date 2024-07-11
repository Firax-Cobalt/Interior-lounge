<?php 
 add_action('wp_enqueue_scripts', 'interior_styles');
 
 function interior_styles() {
    wp_enqueue_style( 'interior-lounge-style', get_stylesheet_uri() );
 };

 add_theme_support( 'custom-logo' );

?>