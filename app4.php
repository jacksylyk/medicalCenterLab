<?php
require 'connection.php';
$login = $_POST['login'];
$number = $_POST['number'];
$service = $_POST['service'];
$time = $_POST['time'];
$time_for_sql = 'time_'.$time;
$doctor_id = $_POST['doctor_id'];

$con = mysqli_connect('localhost', 'root', '', 'coding');
$sql_doctor = "SELECT * FROM `specialists` WHERE id = '$doctor_id'";
$result = mysqli_query($con, $sql_doctor);
$doctor = mysqli_fetch_array($result);
$sql_user = "SELECT * FROM `users` WHERE login = '$login'";
$result2 = mysqli_query($con, $sql_user);
$user = mysqli_fetch_array($result2);

$first_name = $user['first_name'];
$second_name = $user['second_name'];

$doctor_name = $doctor['first_name']." ".$doctor['second_name'];

$sql = "INSERT INTO `requests`(`first_name`, `second_name`, `number`, `service`, `doctor`, `time`) VALUES ('$first_name','$second_name','$number','$service','$doctor_name','$time')";
if (!mysqli_query($con, $sql)) {
    header('Location: ../newnew/problem.html');
}
$sql_update = "UPDATE `specialists` SET `$time_for_sql`='1' WHERE `id` = '$doctor_id'";
if (!mysqli_query($con, $sql_update)) {
    header('Location: ../newnew/problem.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="container text-center">
        <h1>Success!!!</h1><br>
        <h4>Вы записались на прием к <?php echo $doctor['first_name']." ".$doctor['second_name']?></h4>
        <p>Время : <?php echo '1'.--$time.':00'?></p>
        <p><a href="index.php">На главную</a></p>
    </div>
</div>
</body>
</html>