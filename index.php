<?php

require __DIR__ . '/app/Autoload/Loader.php';

use App\Test\TestClass;

App\Autoload\Loader::init( __DIR__ );

$test = new TestClass();
echo $test->getTest();
