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

function run_theme_loader() {
	\YOUR_THEME\Inc\MAIN_LOADER::get_instance();
}

run_theme_loader();
?>