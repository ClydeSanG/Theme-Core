<?php

if ( ! defined( 'THEME_DIR_PATH' ) ) {
	define( 'THEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'THEME_DIR_URI' ) ) {
	define( 'THEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}
if ( ! defined( 'THEMPLATE_DIR' ) ) {
	define( 'THEMPLATE_DIR',  'template-parts' );
}

require_once THEME_DIR_PATH . '/inc/helpers/autoloader.php';

function test_get_theme_instance() {
	\YOUR_THEME\Inc\MAIN_LOADER::get_instance();
}

test_get_theme_instance();
?>