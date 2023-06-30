<?php

class Car {
    public $wheels = 0;
    protected $hood = 0; // protected: only used inside this class & subclass
    private $engine = 0; // private: only used inside this class.
    var $doors = 0;

    static $type = "CAR";

    function __construct() {
        $this->wheels = 4;
        $this->hood = 1;
        $this->engine = 1;
        $this->doors = 4;
    }

    function showType() {
        echo Car::$type . "<br>";
    }

    function showProperty() {
        echo "Wheels Total " . $this->wheels . " wheels.<br>";
        echo "hood: " . $this->hood . "<br>";
        echo "engine: " . $this->engine. "<br>";
    }

}

if (class_exists("Car")) {
    echo "Yes.";
}

if (method_exists("Car", "MoveWheels")) {
    echo "The method exist";
}

$benz = new Car();
$benz->showProperty();
echo "<br>";
echo $benz->wheels."<br>";
echo "Type: ".Car::$type."<br>";
$benz->showType();


// Inherit
class Plane extends Car {

    function __construct() {
        $this->doors = 2;
    }

    // Error: Undefined property: Plane::$engine
    //function show() {
    //    echo $this->engine;
    //}
}

$jet = new Plane();
echo "Jet has " . $jet->wheels . " wheels.<br>";
echo "Jet has " . $jet->doors. " doors.<br>";
$jet->showProperty();


// variable variable
$a = "wheels";
echo "Variable variable1: ".$benz->{$a}."<br>";
$b = "showType";
echo "Variable variable2: ";
$benz->{$b}()."<br>";

?>