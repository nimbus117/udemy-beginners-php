<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


if (! true) {
  echo "not true";
} elseif (5 > 4 && false) {
  echo "not true";
} else {
  echo "I love PHP";
}

echo "<br>";
	
for($i = 0; $i < 10; $i++) {
  echo $i;
}

echo "<br>";

$number = 80;
switch($number){
case $number > 100:
  echo "greater than 100<br>";
  break;
case $number > 75:
  echo "greater than 75<br>";
  break;
case $number > 50:
  echo "greater than 50<br>";
  break;
case $number > 25:
  echo "greater than 25<br>";
  break;
case $number > 0:
  echo "greater than 0<br>";
  break;
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>
