<?php
require 'connection.php';

$sql_update = "UPDATE `specialists` SET `time_1`= 0, `time_2`= 0, `time_3`= 0, `time_4`= 0, `time_5`= 0, `time_6`= 0, `time_7`= 0, `time_8`= 0, `time_9`= 0, `time_10`= 0 WHERE 1";
if (!mysqli_query($con, $sql_update)) {
    header('Location: ../newnew/problem.html');
}
$sql_delete = "truncate requests;";
if (!mysqli_query($con, $sql_delete)) {
    header('Location: ../newnew/problem.html');
}



header('location:index.php');
?>