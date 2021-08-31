<?php

/**
 * Enqueue Theme Assets.
 *
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}
     
	protected function setup_hooks() {
		/**
		 * Actions.
		 */
		//add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
		add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
		add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);

	}

	public function register_styles() {
		// Register styles
		wp_register_style( 'bootstrap-css', ASM_DIR_URI .'/assets/src/libraries/bootstrap/css/bootstrap.css', [], false, 'all' );
		wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( ASM_DIR_PATH . '/style.css' ), 'all' );
		wp_register_style( 'main-css', ASM_DIR_URI .'/assets/css/main.css', ['style-css'], filemtime( ASM_DIR_PATH . '/assets/css/main.css' ), 'all' );

		// enqueue styles
		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'style-css' );
		wp_enqueue_style( 'main-css' );
	}

	public function register_scripts() {
		// Register scripts
		wp_register_script( 'main-js', ASM_DIR_URI .'/assets/js/main.js', [], filemtime( ASM_DIR_PATH . '/assets/js/main.js' ), true );
		wp_register_script( 'bootstrap-js', ASM_DIR_URI .'/assets/src/libraries/bootstrap/js/bootstrap.min.js', [ 'jquery' ], null, true );
		
    	// enqueue scripts
    	wp_enqueue_script( 'bootstrap-js' );
    	wp_enqueue_script( 'main-js' );
	}
}