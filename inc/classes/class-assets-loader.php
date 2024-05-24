<?php

namespace YOUR_THEME\Inc;

use YOUR_THEME\Inc\Traits\Singleton;

class Assets_Loader {
    use Singleton;

    protected function __construct(){
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        add_action( 'wp_enqueue_scripts', [ $this, 'register_style' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_script' ] );
    }

    public function register_style(){
        wp_register_style( 'main', THEME_DIR_URI . '/assets/css/main.css', [], false, 'all' );
        wp_enqueue_style( 'main' );
    }

    public function register_script(){
        wp_register_script( 'main', THEME_DIR_URI . '/assets/css/main.js', ['jquery'], false, true );
        wp_enqueue_script( 'main' );
    }
}

?>