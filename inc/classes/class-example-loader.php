<?php

namespace YOUR_THEME\Inc;

use YOUR_THEME\Inc\Traits\Singleton;

class MAIN_LOADER {
    use Singleton;

    protected function __construct(){
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        // Use: add_action( 'wp_enqueue_scripts', [ $this, 'function-class' ] );
    }
}

?>