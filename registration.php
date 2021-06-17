<?php
require 'connection.php';

$username1 = $_POST['login'];
$password1 = $_POST['password'];
$confirm = $_POST['confPassword'];
$first_name = $_POST['firstName'];
$second_name = $_POST['secondName'];
$token1 = rand(1, 10);
$token2 = rand(1, 10);

if ($password1 == $confirm) {
    $sql = "select * from users where login = '$username1'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        $sql = "INSERT INTO `users`(`login`, `password`,`first_name`,`second_name`, `token1`, `token2`, `verified`,`type`) VALUES ('$username1','$password1','$first_name','$second_name', '$token1' ,'$token2' , 0, 'user')";
        if (mysqli_query($con, $sql)) {

            $sqlCheck = "select * from users where login = '$username1' and password = '$password1'";
            $result = mysqli_query($con, $sqlCheck);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            setcookie('login', $user['login'], time() + 100, "/");
            setcookie('token1', $user['token1'], time() + 100, "/");
            setcookie('token2', $user['token2'], time() + 100, "/");
            header('Location: ../newnew/verification.php');
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    } else {
        header('Location: ../newnew/YouHaveBeen.html');
    }
}
?>