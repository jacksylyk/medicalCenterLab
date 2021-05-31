<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<div class="header">

</div>

<?php
include 'nav.php';
?>
<br>
<br>
<div class="container">
    <div class="jumbotron">
        <h3 class="font-weight-bold">Vacancies</h3>
        <hr class="my-4">
        <?php
        $sql_trend = "SELECT * FROM vacancies";
        $result = mysqli_query($con, $sql_trend);
        $res2 = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)) {
            echo '<h4>' . $row['job_name'] . '</h4>';
            echo '<form action="respond.php" method="post"> ';
            echo '<div class="py-3">' . $row['job_description'] . '</div>';
            echo '<div class="py-3"> Salary about ' . $row['job_salary'] . ' ₸</div>';
            echo '<input type="text" name="id" value="' . $row['job_id'] . '" hidden>';
            echo '<input type="submit" class="btn btn-primary " value="Respond">';
            echo '</form>';
            echo '<hr class="my-4">';
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>

