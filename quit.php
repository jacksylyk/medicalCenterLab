<?php
if (isset($_COOKIE['login'])) {
    unset($_COOKIE['login']);
    setcookie('login', null, -1, '/');
}
header('location:login.php');
?>