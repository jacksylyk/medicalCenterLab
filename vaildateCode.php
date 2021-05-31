<?php

require 'connection.php';


$login = $_COOKIE['login'];
$token1 = $_COOKIE['token1'];
$token2 = $_COOKIE['token2'];
$capcha = $_POST['solution'];
$check = $_POST['check'];
if ($capcha = $token1 + $token2) {
    $sql = "UPDATE `users` SET `verified`='1', `token1`= null , `token2`= null   WHERE login = '$login'";
    if (mysqli_query($con, $sql)) {
        $check = "1";
        setcookie('check',$check,time()+20);
        setcookie('login','',time()-100);
        header('Location: ../newnew/login.php');
    } else {
        $check = "0";
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
} else {
    echo "Error!";
}

?>