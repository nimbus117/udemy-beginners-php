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

$car1 = new Car();
$car1->moveWheels();

$truck1 = new Car();
$truck1->wheels = 10;;
$truck1->moveWheels();
?>
