<?php
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<div class="header">

</div>
<?php
include 'nav.php';
?>
<div class="container-fluid my-4 logo d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-6">
            <img src = "img/hippocrates.png" height="250" width="360" class = "img">
        </div>
        <div class="col-lg-6">
                <h4 class = "py-3">Get your Appointment to the Doctor online!</h4>
                <?php if (isset($_COOKIE['login'])){
                    echo "
                            <form action=\"appointment.php\" method='post'>
                                <input hidden type=\"text\" name='login' value='".$_COOKIE['login']."'>
                                <button class = \"btn btn-info mx-5 submit\" >Сделать запись к врачу!</button>
                            </form>";
                }else{
                    echo"<button class = \"btn btn-info mx-5\"onclick=\"alert('Вы не авторизованы!');\" >Сделать запись к врачу!</button>";
                }?>
        </div>
    </div>
</div>
<p id="about">
<div class="container py-4">
    <h2>MEDICAL CENTER "HIPPOCRATES"</h2>
    <br>
    <div class="container-fluid d-flex-row p-0 row">
        <div class="col-8 p-0">
            <p>Medical Center "Hippocrates" is equipped with a new generation of diagnostic and laboratory equipment.
                They employ specialists who have proven their experience and competence in practice. The clinic has
                doctors of the following areas: therapy, cardiology, endocrinology, neurology, gynecology, urology,
                ultrasound diagnostics, functional diagnostics, etc.</p>
            <p></p>
            <p>The diagnostic department allows you to do all types of analyzes and provide a full range of studies.
                Medical Center "Hippocrates" is a two-storey building, which presents more than 30 types of outpatient
                care with a separate hospital, has its own parking. Modern equipment and stylish design will delight
                even the most sophisticated patient. We will be glad to see you in our medical center!</p><br>
            <a href="#"><b>LEARN MORE</b></a>
        </div>

    </div>

</div>
<div class="container ">
    <div class="jumbotron">
        <h3 class="font-weight-bold">News</h3>
        <hr class="my-4">
        <?php
        $sql_trend = "SELECT * FROM news LIMIT 3";
        $result = mysqli_query($con, $sql_trend);
        $res2 = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)) {
            echo '<h4>' . $row['article_title'] . '</h4>';
            echo '<form action="article.php" method="post"> ';
            echo '<div class="py-3">' . $row['article_description'] . '</div>';
            echo '<input type="text" name="id" value="' . $row['article_id'] . '" hidden>';
            echo '<input type="submit" class="btn btn-primary " value="Learn more">';
            echo '</form>';
            echo '<hr class="my-4">';
        }
        ?>
    </div>
</div>
<br>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>
</html>