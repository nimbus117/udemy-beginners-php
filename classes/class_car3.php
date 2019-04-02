<?php 

class Car {

  function moveWheels() {
    echo "Wheels move";
  }
}

$car1 = new Car();
$car2 = new Car();

$car1->moveWheels();
$car2->moveWheels();

?>
