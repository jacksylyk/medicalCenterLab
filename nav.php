<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Hippocrates</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item">
                    <?php if (isset($_COOKIE['login'])) {
                        echo '
                            <div class="dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
                                        $_COOKIE['login'] . '
                              </a>
            
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="cart.php">Cart</a>
                                <a class="dropdown-item" href="login.php">Quit</a>
                              </div>
                            </div>';
                    } else {
                        echo '<a href="login.php" class="nav-link">Login</a>';
                    } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>