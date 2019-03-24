<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$number = array('juanita', 'maria', 'jose');

//print_r($number);

echo $number[0] . "<br>";
echo "<br>";  


// Associative Array Below

$names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );

//print_r($names);

echo $names['first_name'] . " " . $names['Last_Name'];
echo "<br>";  


$age = array(
  "james" => 33,
  "george" => 36
);

echo $age["james"];
echo "<br>";  

foreach ($age as $name => $age) {
  echo $name . " " . $age;
  echo "<br>";
}

?>

</body>
</html>
