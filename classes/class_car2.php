<?php 

class Car {

  function moveWheels() {
    echo "Wheels move";
  }
}

if (method_exists("Car", "moveWheels")) {
  echo "moveWheels method exists";
} else {
  echo "moveWheels method does not exist";
}

?>
