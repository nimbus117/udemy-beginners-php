<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php 

$number = 100;

switch($number){

    case 34:
    echo "it is 34";
    break;
    case 37:
    echo "is it 34";
    break;
    case 100:
    echo "is it 100";
     break;
    case 24:
    echo "is it 24";
      break;
    
    default : 
     echo "we could not find anything";
    break;


}
echo "<br>";
echo "<br>";
$number = 60;
switch ($number) {
  case $number > 100:
    echo "greater than 100 <br>";
  case $number > 50:
    echo "greater than 50 <br>";
  case $number > 25:
    echo "greater than 25 <br>";
}
    
    
?>
    
</body>
</html>
