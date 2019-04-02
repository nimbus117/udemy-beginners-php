<?php 

class Car {

  static $wheels = 4;
  var $hood = 1;

  function moveWheels() {
    echo "<p>Moving $this->wheels wheels</p>";
  }

  function setWheels() {
    Car::$wheels = 10;
  }
}

$car1 = new Car();

Car::setWheels();
echo Car::$wheels;
?>
