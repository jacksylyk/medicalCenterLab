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
                    <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Contacts</a>
                </li>
                <li class="nav-item">
                    <?php
                    require 'connection.php';

                    if (isset($_COOKIE['login'])) {
                        $login = $_COOKIE['login'];
                        $sql = "select * from users where login = '$login'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        if($row['type'] == 'admin'){
                            echo '
                            <div class="dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
                                $_COOKIE['login'] . '
                              </a>
            
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="requests.php">All Requests</a>
                                <a class="dropdown-item" href="deleteRequests.php">Clear all requests</a>
                                <a class="dropdown-item" href="quit.php">Quit</a>
                              </div>
                            </div>';
                        }elseif ($row['type'] == 'doctor'){
                            echo '
                            <div class="dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
                                $_COOKIE['login'] . '
                              </a>
            
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="docRequests.php">Doctor`s Requests</a>
                                <a class="dropdown-item" href="quit.php">Quit</a>
                              </div>
                            </div>';
                        }else{
                            echo '
                            <div class="dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
                                $_COOKIE['login'] . '
                              </a>
            
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="myRequests.php">My Requests</a>
                                <a class="dropdown-item" href="quit.php">Quit</a>
                              </div>
                            </div>';
                        }
                    } else {
                        echo '<a href="login.php" class="nav-link">Login</a>';
                    } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>