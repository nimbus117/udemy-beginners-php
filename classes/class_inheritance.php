<?php 

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function moveWheels() {
    echo "<p>Moving $this->wheels wheels</p>";
  }
}

// $car1 = new Car();

class Plane extends Car {
  var $wheels = 20;
}

$plane1 = new Plane();
$plane1->moveWheels();

?>
