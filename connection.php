<?php
$servername   = "localhost";
$database = "coding";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password, $database);
if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
}

?>