<?php
require 'connection.php';
$username = $_POST['login'];
$password = $_POST['password'];

$sql = "select * from users where login = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    setcookie('login', $row['login'], time() + 360, "/");
    if (mysqli_query($con, $sql)) {
        header('Location: ../newnew/index.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
} else {
    header('Location: ../newnew/problem.html');
}
?>