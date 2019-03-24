<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
    .error {
      color: red;
    }
  </style>
</head>
<body>
<?php

if (isset($_POST['submit'])) {

  function validateLength (string $key, int $min, int $max) {
    if (isset($_POST[$key])) {
      $length = strlen($_POST[$key]);
      if ($length < $min || $length > $max) {
        $msg =
          "Please make sure your " . ucfirst($key) .
          " is between $min and $max characters";
        return "<div class='error'>$msg</div>";
      }
    }
  }

  function validateNotValue (string $key, array $values) {
    if (isset($_POST[$key])) {
      if (in_array($_POST[$key], $values)){
        $msg =
          "Sorry the $key {$_POST[$key]} is already in use," .
          " try picking a different one";
        return "<div class='error'>$msg</div>";
      }
    }
  }

  echo validateLength("username", 3, 10);
  echo validateLength("password", 8, 16);
  echo validateNotValue("username", array("James", "Sam", "Tony"));
}

?>
</body>
</html>
