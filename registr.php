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

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Hippocrates</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">About the clinic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Specialists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Vacancies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Contacts</a>
                </li>
        </ul>
    </div>
    </div>
</nav>
<br>
<br>
<div class="container">
    <div class = "row">
        <h1 class = "col-lg-12 text-center">
            Registration
        </h1>
        <div class = "col-lg-3">
        </div>
        <div class = "col-lg-6">
            <form action = "registration.php" method="post" class="form-login">
                <div class="form-label-group">
                    <input type="text" style = "height : 50px;" class= "form-control my-3 col-lg-12" placeholder="Логин" name = "login" required autofocus>
                </div>
                <div class="form-label-group">
                    <input type="password"  class = "form-control my-3 col-lg-12"style = "height : 50px;" placeholder="Пароль" name = "password" required>
                </div>
                <div class="form-label-group">
                    <input type="password"  class = "form-control col-lg-12"style = "height : 50px;" placeholder="Подтвердите пароль" name = "confPassword" required>
                </div>
                <div>
                    <button class="button btn btn-info btn-lg btn-block my-3" type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
        <div class = "col-lg-3">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
