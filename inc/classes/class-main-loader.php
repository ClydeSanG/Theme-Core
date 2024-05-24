<?php

namespace YOUR_THEME\Inc;

use YOUR_THEME\Inc\Traits\Singleton;

class MAIN_LOADER {
    use Singleton;

    protected function __construct(){
        Assets_Loader::get_instance();
    }
}

?>