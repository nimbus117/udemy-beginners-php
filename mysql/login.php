<?php 

if (isset($_POST['submit'])) {

  // $username = $_POST['username'];
  // $password = $_POST['password'];

  // if ($username && $password) {
  //   echo $username;
  //   echo $password;
  // } else {
  //   echo "Please enter a username and password";
  // }

  // mysqli_connect('host', 'username', 'password', 'database')
  $connection = mysqli_connect('localhost', 'loginapp', 'loginapp', 'loginapp');

  if ($connection) {
    echo "Connection succeded";
  } else {
    die("Connection failed");
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
