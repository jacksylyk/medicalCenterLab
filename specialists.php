<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Specialists</title>
</head>
<body>

<?php
include 'nav.php';
?>
<br>
<br>
<div class="container-fluid">
    <div class = "row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-9">

            <div class="row">
                <?php
                $sql_request = "SELECT * FROM specialists";
                $result = mysqli_query($con, $sql_request);
                $res2 = mysqli_num_rows($result);


                while ($row = mysqli_fetch_array($result)) {
                    echo '<div class="card col-lg-3 p-3 m-3">';
                    echo '<img src="'.$row['photo'].'" class="card-img-top" alt="ava">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'.$row['first_name'].' '.$row['second_name'].'</h5>';
                    echo '<p class="card-text">'.$row['job'].'</p>';
                    echo '<p class="card-text"><small class="text-muted">Пн.- Пт. по записи</small></p>';
                    echo "</div>";
                    echo "</div>";

                }
                ?>
            </div>
        </div>
        <div class="col-lg-1">

        </div>
    </div>
</div>
</body>
</html>