<?php

require __DIR__ . '/app/Autoload/Loader.php';


App\Autoload\Loader::init( __DIR__ );

// use App\Test\TestClass;
// $test = new TestClass();
// echo $test->getTest();

use App\Test\ {
    NewTestClass,
    // TestClass
};

$new = new NewTestClass;
// $new->test();
$new->test2();