<?php

namespace Strata\MuPlugin\Acf;

use Strata\Strata;

class Acf {

    const FOLDER_NAME = 'acf';

    public function register()
    {
        if (function_exists("get_field")) {
            add_filter('acf/settings/save_json', array($this, "save"));
            add_filter('acf/settings/load_json', array($this, "load"));
        }
    }

    public function load($paths)
    {
        unset($paths[0]);
        $paths[] = \Strata\Strata::getConfigurationPath() . self::FOLDER_NAME;
        return $paths;
    }

    public function save($paths)
    {
        $path = Strata::getConfigurationPath() . self::FOLDER_NAME;
        if (!is_dir($path)) {
            mkdir($path);
        }

        return $path;
    }

}
