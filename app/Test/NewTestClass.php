<?php 

namespace App\Test;

use App\Test\TestClass;

class NewTestClass extends TestClass {
    public function test() {
        $test_class = new TestClass;
        echo $test_class->getTest();
        echo "Hello World!";
    }

    public function test2() {
        echo $this->getTest();
        echo "Hello World! 2";
    }
}