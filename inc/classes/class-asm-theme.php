<?php
/**
 * Bootstraps the Theme.
 *
 * @package ASM
 */

namespace ASM_THEME\Inc;

use ASM_THEME\Inc\Traits\Singleton;

class ASM_THEME {
	use Singleton;

	protected function __construct() {

		// Load class.
		Assets::get_instance();
		Menus::get_instance();
		// Meta_Boxes::get_instance();
		Sidebars::get_instance();
		// Blocks::get_instance();
		// Block_Patterns::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * https://developer.wordpress.org/themes/functionality/
		 * Actions.
		 */
		add_action( 'after_setup_theme', [$this, 'setup_theme'] );
	}

	public function setup_theme() {
		// Add support the title tags
		add_theme_support( 'title-tag' );


		add_theme_support( 'custom-logo', [
			'header-text' => [ 'site-title', 'site-description' ],
			'height' => 100,
			'width' => 400,
			'flex-height' => true,
			'flex-width' => true
		] );

		// add_theme_support( 'custom-background', [
		// 	'default-color' => '#f0f0f0',
		// 	'default-image' => ''
		// ] );
		
		add_theme_support( 'post-thumbnails' );
		
		// rss feed
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 
			'html5', 
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style'
			]
		);

		// add support for tiny mce editor
		add_editor_style();
		add_theme_support('wp-block-styles');

		// add support for images to be wide or full width
		add_theme_support('align-wide');

		// sets maximum content width
		global $content_width;
		if( ! isset( $content_width ) ) {
			$content_width = 1240;
		}


	}


}

