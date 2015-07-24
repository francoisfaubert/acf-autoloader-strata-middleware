<?php

namespace Strata\MuPlugin\Acf;

class PluginInitializer extends \Strata\Plugin\Plugin {

    public static function initialize()
    {
        add_action('plugins_loaded', array(new Acf(), "register"));
    }

}
