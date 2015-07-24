<?php

namespace Strata\MuPlugin\ACF;

use Strata\Strata;

class Acf {

    const FOLDER_NAME = 'acf';

    public function load()
    {
        unset($paths[0]);
        $paths[] = \Strata\Strata::getConfigurationPath() . self::FOLDER_NAME;
        return $paths;
    }

    public function save()
    {
        $path = Strata::getConfigurationPath() . self::FOLDER_NAME;
        if (!is_dir($path)) {
            mkdir($path);
        }

        return $path;
    }

}
