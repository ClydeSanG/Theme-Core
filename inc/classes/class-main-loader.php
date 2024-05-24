<?php

namespace YOUR_THEME\Inc;

use YOUR_THEME\Inc\Traits\Singleton;

class MAIN_LOADER {
    use Singleton;

    protected function __construct(){
        Assets_Loader::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks(){}

    public function setup_theme(){}
}

?>