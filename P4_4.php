<!--Write a program to Implement static properties in PHP.-->
<?php

class MyClass {
    public static $staticProperty = "Hello, World!";

    public function __construct() {
        // Constructor
    }

    public static function getStaticProperty() {
        return self::$staticProperty;
    }

    public static function setStaticProperty($value) {
        self::$staticProperty = $value;
    }
}

// Accessing static property without creating an instance of the class
echo MyClass::$staticProperty; // Output: Hello, World!
echo "<br>";

// Changing the value of the static property
MyClass::$staticProperty = "Greetings!";
echo MyClass::getStaticProperty(); // Output: Greetings!
echo "<br>";

// Creating an instance of the class
$obj1 = new MyClass();
echo $obj1::$staticProperty; // Output: Greetings!
echo "<br>";

// Creating another instance of the class
$obj2 = new MyClass();
echo $obj2::$staticProperty; // Output: Greetings!
echo "<br>";

// Changing the value of the static property using a method
$obj1::setStaticProperty("Goodbye!");
echo $obj1::$staticProperty; // Output: Goodbye!
echo "<br>";
echo $obj2::$staticProperty; // Output: Goodbye!
echo "<br>";

?>
