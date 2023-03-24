<?php

// final means this class 
// cannot be extended/inherited by a child class
final class Foo
{
    // final means the method for this class 
    // cannot be overriden by a child class
    final public function sayHello()
    {
        echo 'Hello World!';
    }
}
