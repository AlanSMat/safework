<?php
/**
 * Theme Functions
 * 
 * @package ASM
 */

if ( ! defined( 'ASM_DIR_PATH' ) ) {
	define( 'ASM_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'ASM_DIR_URI' ) ) {
	define( 'ASM_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once ASM_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once ASM_DIR_PATH . '/inc/helpers/template-tags.php';

function asm_get_theme_instance() {
	\ASM_THEME\Inc\ASM_THEME::get_instance();
}

asm_get_theme_instance();