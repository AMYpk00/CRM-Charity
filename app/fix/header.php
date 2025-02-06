<header>
    <div class="logo"><a href="<?php echo BASE_URL . "/ENG-index.php" ?>"><img src="./assets/pic/customLogo.png" alt="Logo"></a></div>
    <i class="fa-solid fa-bars"></i>
    <ul class="nav">
        <li><a class="hover" href="<?php echo BASE_URL . "/ENG-index.php" ?>">Home</a></li>
        <li><a class="hover" href="<?php echo BASE_URL . "/about-us.php" ?>">About Us</a></li>
        <li><a class="hover" href="<?php echo BASE_URL . "/activities.php" ?>">Activities</a></li>
        <li><a class="hover" href="https://crm-c.com/blogs/" target="_blank">Knowledge</a></li>
        <li><a class="hover" href="<?php echo BASE_URL . "/donation.php" ?>">Donation</a></li>
        <li><a class="hover" href="<?php echo BASE_URL . "/contact.php" ?>">Contact Us</a></li>
        <li><a class="hover" href="<?php echo BASE_URL . "/index.php" ?>"><i class="fa-solid fa-earth-americas"></i></a></li>

        <?php if (isset($_SESSION['id'])): ?>
            <li>
                <a href="#">
                <i class="fa-solid fa-user"></i>
                    <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul>
                    <li><a class="hover" href="<?php echo BASE_URL . "/logout.php" ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li><a class="hover" target="_blank" href="<?php echo BASE_URL . "/login.php" ?>"><i class="fa-solid fa-right-to-bracket"></i>&ensp;Login</a></li>
        <?php endif; ?>

    </ul>
</header>