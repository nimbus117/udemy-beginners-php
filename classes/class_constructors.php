<?php 

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function __construct() {
    echo $this->wheels;
  }
  

  function moveWheels() {
    echo "<p>Moving $this->wheels wheels</p>";
  }
}

$car1 = new Car();

?>
