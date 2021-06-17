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
        <h3 class="font-weight-bold">Requests</h3>
        <hr class="my-4">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Number</th>
                <th scope="col">Service</th>
                <th scope="col">Time</th>
                <th scope="col">Doctor</th>
            </tr>
            </thead>
            <tbody>

                <?php
                $sql_request = "SELECT * FROM requests";
                $result = mysqli_query($con, $sql_request);
                $res2 = mysqli_num_rows($result);


                while ($row = mysqli_fetch_array($result)) {
                    $time = $row['time'];
                    echo '<tr>';
                    echo '<th scope="row">'.$row['id'].'</th>';
                    echo "<td>".$row['first_name']."</td>";
                    echo "<td>".$row['second_name']."</td>";
                    echo "<td>".$row['number']."</td>";
                    echo "<td>".$row['service']."</td>";
                    echo "<td>".'1'.--$time.':00'."</td>";
                    echo "<td>".$row['doctor']."</td>";
                    echo '</tr>';

                }
                ?>

            </tbody>
        </table>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>

