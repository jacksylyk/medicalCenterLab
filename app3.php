<?php
require 'connection.php';
$login = $_POST['login'];
$number = $_POST['number'];
$service = $_POST['service'];
$doctor_id = $_POST['doctor_id'];


$con = mysqli_connect('localhost', 'root', '', 'coding');
$sql_trend = "SELECT * FROM `specialists` WHERE id = '$doctor_id'";
$result = mysqli_query($con, $sql_trend);
$res2 = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

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


            <div class="form-group">
                <h4>Choose a time</h4><br>
                <div class="container">
                    <p>Morning</p>
                    <div class="d-flex">
                        <?php
                            if($row['time_1'] == 1){
                                echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">10:00</button>';
                            }else{
                                echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="0" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info ">10:00</button>
                        </form>';
                            }

                        if($row['time_2'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">11:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="1" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info">11:00</button>
                        </form>';
                        }
                        ?>
                    </div>

                    <p>Afternoon</p>
                    <div class="d-flex">
                        <?php
                        if($row['time_3'] == 1){
                            echo '<button class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">12:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="3" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info ">12:00</button>
                        </form>';
                        }

                        if($row['time_4'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">13:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="4" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info">13:00</button>
                        </form>';
                        }

                        if($row['time_5'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">14:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="5" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info">14:00</button>
                        </form>';
                        }

                        if($row['time_6'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">15:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="6" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info">15:00</button>
                        </form>';
                        }

                        if($row['time_7'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">16:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="7" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info">16:00</button>
                        </form>';
                        }

                        if($row['time_8'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary  mx-3 px-2 my-md-2 my-sm-2">17:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="8" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info">17:00</button>
                        </form>';
                        }
                        ?>

                    <br>
                    </div>
                    
                    <p>Evening</p>
                    <div class="d-flex">
                        <?php
                        if($row['time_9'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">18:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="9" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info ">18:00</button>
                        </form>';
                        }

                        if($row['time_10'] == 1){
                            echo '<button type="submit" class = "btn btn-secondary mx-3 px-2 my-md-2 my-sm-2">19:00</button>';
                        }else{
                            echo '<form action="app4.php" class="py-2 px-2 my-md-2 my-sm-2" method="post">
                            <input type="text" value="10" hidden name="time">
                            <input type="text" hidden class="form-control" value="'.$login.'" name="login">
                            <input type="text" hidden class="form-control" value="'.$number.'" name="number">
                            <input type="text" hidden class="form-control" value="'.$service.'" name="service">
                            <input type="text" hidden class="form-control" value="'.$doctor_id.'" name="doctor_id">
                            <button type="submit" class = "btn btn-info">19:00</button>
                        </form>';
                        }
                        ?><br><br>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
</html>
