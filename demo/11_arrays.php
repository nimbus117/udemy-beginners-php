<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

$numberList = array(267,8765,345,'5345', 345, '<h1>Hello</h1>');
$numberList = [267,8765,345,'5345', 345, '<h1>Hello</h1>'];

//print_r($numberList);

 echo $numberList[5];
 echo $numberList[4]."\n";
 echo $numberList[3];
    
    
?>

</body>
</html>
