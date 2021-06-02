<?php
/**
 * Theme Functions
 * 
 * @package safework
 */

function sw_enqueue_scripts() {
    
    // Register styles
    wp_register_style( 'bootstrap-css', get_template_directory_uri() .'/assets/src/libraries/bootstrap/css/bootstrap.css', [], false, 'all' );
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_register_style( 'main-css', get_template_directory_uri() .'/assets/css/main.css', ['style-css'], filemtime( get_template_directory() . '/assets/css/main.css' ), 'all' );
        
    // Register scripts
    wp_register_script( 'main-js', get_template_directory_uri() .'/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
    wp_register_script( 'bootstrap-js', get_template_directory_uri() .'/assets/src/libraries/bootstrap/js/bootstrap.min.js', [ 'jquery' ], false, true );

    // enqueue styles
    wp_enqueue_style( 'bootstrap-css' );
    // wp_enqueue_style( 'style-css' );
    // wp_enqueue_style( 'main-css' );
    

    // enqueue scriptss
    // wp_enqueue_script( 'bootstrap-js' );
    // wp_enqueue_script( 'main-js' );
}
add_action('wp_enqueue_scripts', 'sw_enqueue_scripts');

?>
