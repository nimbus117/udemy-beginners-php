<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

echo floor(4.7)."<br>";

echo strlen("test")."<br>";

$arr = array(4,5,6,7,8);

echo min($arr);

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
