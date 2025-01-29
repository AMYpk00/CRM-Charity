<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php") ?>

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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
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
            <a href="<?php echo BASE_URL . "/admin/users/index.php" ?>"><button class="btn btn-secondary">Manage Users</button></a>
        </div>
        <h1 class="page-title">Create User</h1>
    
    <form action="create.php" method="post">
        <label for="username">Username</label>
            <input type="text" id="username" value="" name="username" required>
          
        <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        <div class="admin">
        <label for="admin">Role</label>
            <select name="admin" id="" class="text-input">
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <div class="save">
            <button type="submit" name="create_user" class="btn btn-primary">Save User</button>
            </div>
        </div>
    </form>
    </div>
    
        
        </div>
    </div>

</body>
</html>