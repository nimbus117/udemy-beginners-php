
<?php 

include "db.php";

function showAllData() {
  global $connection;

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);
  if (!$result) die("Query failed: " . mysqli_error($connection));

  while($row = mysqli_fetch_assoc($result)) {  
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function create() {
  if (isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username && $password) {

      $query = "INSERT INTO users (username, password) " .
        "VALUES ('$username', '$password')";

      $result = mysqli_query($connection, $query);

      if (!$result) {
        die("Query failed: " . mysqli_error($connection));
      }
      else {
        echo "Record created";
      }
    }
    else {echo "Please enter a username and password";}
  }
}

function read() {
  global $connection;

  $query = "SELECT * FROM users";

  // mysqli_query(connection, query)
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query failed: " . mysqli_error($connection));
  }

  while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
  }
}

function update() {
  if (isset($_POST['submit'])) {
    global $connection;

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE users SET " .
      "username = '$username', " .
      "password = '$password' " .
      "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed: " . mysqli_error($connection));
    }
    else {
      echo "Record updated";
    }
  }
}

function delete() {
  if (isset($_POST['submit'])) {
    global $connection;

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "DELETE FROM users " .
      "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed: " . mysqli_error($connection));
    }
    else {
      echo "Record deleted";
    }
  }
}

?>
