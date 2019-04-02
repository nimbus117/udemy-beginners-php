<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	*/


class Dog {

  private $name;
  private $breed;
  private $colour;
  private $age;

  /**
   * @param string $name
   * @param string $breed
   * @param string $colour
   * @param int $age
   */
  public function __construct(string $name, string $breed, string $colour, int $age) {
    $this->name = $name;
    $this->breed = $breed;
    $this->colour = $colour;
    $this->age = $age;
  }

  public function show(): Dog {
    return $this;
  }
}

$dog1 = new Dog("Bob", "Poodle", "White", 5);
var_dump($dog1->show());
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
