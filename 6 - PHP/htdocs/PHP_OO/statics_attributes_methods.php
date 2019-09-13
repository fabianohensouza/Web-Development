<?php

    class Example {
        public static $attr1 = 'I am a static attribute';
        public $attr2 = 'I am a normal attribute';

        public static function method1() {
            echo 'I am a static method';
            echo ' - ';
            echo Example::$attr1;
        }   

        public function method2() {
            echo 'I am a normal method';
        }
    }

    //Call a static method directly from the class
    echo Example::$attr1;
    echo '</br>';
    Example::method1();
    echo '<hr>';

    //A non-static method can be called like a static method, a non-static variable not
    Example::method2();
    echo '</br>';
    //echo Example::$attr2;
    echo '<hr>';

    //Instancing an object
    $example = new Example();
    echo $example::$attr1;
    echo '</br>';
    echo $example->attr2;
    echo '</br>';
    $example::method1();
    echo '</br>';
    $example->method2();
    echo '<hr>';

?>