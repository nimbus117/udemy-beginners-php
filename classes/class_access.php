<?php 

class Car {

  public $wheels = 4;
  protected $hood = 1;
  private $engine = 1;
  var $doors = 4;

  function showPrivateProperty() {
    echo "<p>$this->engine</p>";
  }

  function moveWheels() {
    echo "<p>Moving $this->wheels wheels</p>";
  }
}

$car1 = new Car();

class Semi extends Car {

  function showProtectedProperty() {
    echo "<p>$this->hood</p>";
  }

  // function showPrivateProperty() {
  //   echo "<p>$this->engine</p>";
  // }
}

$semi1 = new Semi();
$semi1->showProtectedProperty();
$semi1->showPrivateProperty();

?>
