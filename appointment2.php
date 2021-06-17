<?php
require 'connection.php';
$login = $_POST['login'];
$number = $_POST['number'];
$service = $_POST['service'];
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
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <br>
            <br>
            <h3 class = "text-center">APPOINTMENT</h3><br>
            <form action="app3.php" method="post">
                <div class="form-group py-1">
                    <select name="doctor_id" class="form-control">
                        <option selected disabled>Choose the doctor: </option>
                        <?php

                        $con = mysqli_connect('localhost', 'root', '', 'coding');
                        $sql_trend = "SELECT * FROM `specialists` WHERE job = '$service'";
                        $result = mysqli_query($con, $sql_trend);
                        $res2 = mysqli_num_rows($result);

                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option  value="' . $row['id'] . '">' . $row['first_name'] . ' '.$row['second_name'].'</option>';
                        }
                        ?>
                    </select>
                    <br>
                    <input type="text" hidden class="form-control" value="<?php echo $login?>" name="login">
                    <input type="text" hidden class="form-control" value="<?php echo $number?>" name="number">
                    <input type="text" hidden class="form-control" value="<?php echo $service?>" name="service">
                    <button class = "form-control btn-info btn-lg" type="submit">Continue</button>
                </div>
            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
</html>