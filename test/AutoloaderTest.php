<?php

require 'vendor/autoload.php';

use Strata\Middleware\Acf_Autoloader\Initializer;
use Strata\Middleware\Middleware;

class AutoloaderTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInstanciated()
    {
        $this->assertTrue(new Initializer() instanceof Middleware);
    }
    
}
