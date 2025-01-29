<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>
<?php 
if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
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
    
    <title><?php echo $post['title']; ?></title>
</head>

<body>
    
    <?php include(ROOT_PATH . "/app/fix/TH-header.php"); ?>

    <div class="blog">
        <div class="main-blog">
            <h1 class="post-title"><?php echo $post['title']; ?></h1>
            <div class="post-date-ac">
                <i class="fa-solid fa-calendar-days"></i>
                <span><?php echo date('F j, Y', strtotime($post['created_at'])); ?></span>
            </div>
            <div class="post">
                <img src="<?php echo BASE_URL . '/assets/pic/' . $post['image']; ?>" alt="" class="post-img">
                <div class="preview">
                    <h4><?php echo $post['title']; ?></h4>
                    <p><?php echo $post['body']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/fix/TH-footer.php"); ?>
    <!-- Footer -->
     
</body>

</html>