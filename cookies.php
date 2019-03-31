<?php 

$name = 'cookieName';
$value=100;
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php 

if (isset($_COOKIE["cookieName"])) {
  $cookie = $_COOKIE['cookieName'];
  echo $cookie;

} else {
  $cookie = "";
}

?>
</body>
</html>
