<?php

// autoloading and the final keyword

// autoloads other classes from other files in root
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$foo = new Foo;
$bar = new Bar;

$bar->sayHello();
