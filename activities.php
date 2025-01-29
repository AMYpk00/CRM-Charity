<?php
include("path.php");
include("app/database/db.php");

$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c37ac7a1ae.js" crossorigin="anonymous"></script>

    <script src="./assets/script/script.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Activities - CRM-C</title>
</head>

<body>
    <!-- header -->
    <?php include(ROOT_PATH . "/app/fix/header.php"); ?>
    <!-- header -->

    <div class="about-section">
        <h1>Activities</h1>
        <div class="about-bar1">
            <span>Our Recent Activities</span>
        </div>
    </div>

    <!-- Slide -->
    <div class="page-wrapper">
        <div class="slide">
            <i class="fa-solid fa-circle-left prev"></i>
            <i class="fa-solid fa-circle-right next"></i>
            <div class="post-wrap">
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <a href="activity-page.php?id=<?php echo $post['id']; ?>">
                            <img class="post-img" src="<?php echo BASE_URL . '/assets/pic/' . $post['image']; ?>" alt="">
                            <div class="info">
                                <h4><?php echo $post['title']; ?></h4>
                                <p>CRM Charity Foundation</p>
                                <div class="post-date">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <!-- break -->
            </div>
        </div>
    </div>
    <!-- Slide -->

    <!-- Activity blog -->
    <div class="blog">

        <div class="main-blog">
            <h1 class="activity-title">Recent Activities</h1>

            <?php foreach ($posts as $post): ?>
                <a href="activity-page.php?id=<?php echo $post['id']; ?>" class='noHover'>
                    <div class="blog-post">
                        <img src="<?php echo BASE_URL . '/assets/pic/' . $post['image']; ?>" alt="" class="blog-post-img">
                        <div class="blog-preview">
                            <h2><?php echo $post['title']; ?></h2>
                            <p>
                                <?php echo html_entity_decode(substr($post['body'], 0, 150)); ?>
                            </p>
                            <br><br>
                            <div class="post-date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                            </div>
                            <a href="activity-page.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>


    </div>
    <!-- Activity blog -->

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/fix/footer.php"); ?>
    <!-- Footer -->

</body>

</html>