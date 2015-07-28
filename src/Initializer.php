<?php

namespace Strata\Middleware\Acf_Autoloader;

use Strata\Middleware\Acf_Autoloader\Autoloader\Acf;

class Initializer extends \Strata\Middleware\Middleware {

    public function initialize()
    {
        add_action('plugins_loaded', array(new Acf(), "register"));
    }

}
