<?php

namespace Strata\Middleware\Acf_Autoloader\Autoloader\Acf;

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
        $paths[] = $this->getConfigurationPath();
        return $paths;
    }

    public function save($paths)
    {
        $path = $this->getConfigurationPath();

        if (!is_dir($path)) {
            mkdir($path);
        }

        return $path;
    }

    private function getConfigurationPath()
    {
        return Strata::getConfigurationPath() . self::FOLDER_NAME;
    }

}
