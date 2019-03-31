<?php

// mysqli_connect('host', 'username', 'password', 'database')
$connection = mysqli_connect('localhost', 'loginapp', 'loginapp', 'loginapp');

if (!$connection) die("Connection failed");

?>
