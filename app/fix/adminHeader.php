<header>
        <div class="logo"><a href="<?php echo BASE_URL . "/index.php" ?>"><img src="../../assets/pic/customLogo.png" alt="Logo"></a></div>
        <i class="fa-solid fa-bars"></i>
        <ul class="nav"> 
        <li>
                <a href="#">
                    <i class="fa-solid fa-circle-user"></i>
                    <?php 
                    // Check if the session is started and username is set
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start(); // Start the session if not already started
                    }
                    // Only display username if it is set
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username']; 
                    } else {
                        // Optionally, you can redirect to login or show an error
                        header("Location: " . BASE_URL . "/login.php");
                        exit();
                    }
                    ?>
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul>
                    <li><a class="hover" href="<?php echo BASE_URL . "/logout.php" ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>