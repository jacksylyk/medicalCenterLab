<!DOCTYPE html>
<html>
<?require 'connection.php';?>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
            href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Coda+Caption:wght@800&family=Staatliches&display=swap"
            rel="stylesheet">
    <!-- Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/login.css"/>
</head>

<body>
<?php
include 'nav.php';
?>

<div class="text-center d-flex flex-column justify-content-center row">
    <div>
        <br>
        <br>
        <h3>Hi, <?= $_COOKIE['login'] ?>!</h3>
        <p>Please solve the equation and write the solution</p>
        <h3><?= $_COOKIE['token1'] ?> + <?= $_COOKIE['token2'] ?></h3>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <form method="post" action="vaildateCode.php">
            <input type="text" class="form-control" name="solution" placeholder="Solution here!">
            <br>
            <input type="text" hidden name = "check" value="-1">
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div>

</div>
</body>

</html>