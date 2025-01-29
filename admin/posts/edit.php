<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;..." rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c37ac7a1ae.js" crossorigin="anonymous"></script>

    <!-- CSS files -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <!-- jQuery first -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <!-- Script -->
    <script src="../../assets/script/script.js"></script>

    <title>Admin Section</title>
</head>

<body>

    <!-- Header -->
    <?php include(ROOT_PATH . "/app/fix/adminHeader.php"); ?>
    <!-- Header -->

    <div class="admin-wrap">

        <!-- left sidebar -->
        <?php include(ROOT_PATH . "/app/fix/sidebar.php"); ?>
        <!-- left sidebar -->

        <div class="admin-content">
            <div class="header-actions">
                <!-- <a href="create.html"><button class="btn btn-primary">Add Post</button></a> -->
                <a href="<?php echo BASE_URL . "/admin/posts/index.php" ?>"><button class="btn btn-secondary">Manage Posts</button></a>
            </div>
            <h1 class="page-title">Edit Post</h1>

            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="<?php echo $title ?>" id="title" class="text-input">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body"><?php echo $body ?></textarea>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image">
                </div>


                <div class="form-group">
                    <button type="submit" name="update_post" class="btn btn-primary">Update Post</button>
                </div>
            </form>
        </div>


    </div>
    </div>

</body>

</html>