<?php

namespace Strata\MuPlugin\Acf;

class PluginInitializer extends \Strata\Plugin\Plugin {

    public static function initialize()
    {
        if (function_exists("get_field")) {
            $acf = new Acf();
            add_filter('acf/settings/save_json', array($acf, "save"));
            add_filter('acf/settings/load_json', array($acf, "load"));
        }
    }

}
