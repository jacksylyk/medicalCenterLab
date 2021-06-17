<?php
require 'connection.php';?>
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
                <form action="appointment2.php"method="post">
					<div class="form-group py-1">
                        <input type="text" class="form-control" name="login" value="<?php echo $_COOKIE['login']?>" placeholder="Login">
					</div>
					<div class="form-group py-1">
                        <input type="text" class="form-control" name="number" placeholder="Phone Number">
					</div>
                    <div class="form-group py-1">
                        <label>Choose service type: </label>

                        <ul>
                            <?php
                            $con = mysqli_connect('localhost','root','','coding');
                            $sql_trend = "SELECT * FROM service_type";
                            $result = mysqli_query($con, $sql_trend);
                            $res2 = mysqli_num_rows($result);
                            while($row = mysqli_fetch_array($result)) {
                                echo '<li><input class = "mx-1" name ="service" type="radio" value="'.$row['name'].'">'.$row['name'].'</li>';
                            }
                            ?>
                        </ul>


                    </div>
                    <button class = "form-control btn-info" type="submit">Continue</button>
                </form>
		</div>
	</div>
</body>
</html>