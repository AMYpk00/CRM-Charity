<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include(ROOT_PATH . "/app/database/db.php");

$table = 'posts';

$posts = selectAll($table);

$errors = array();
$id = "";
$title = "";
$body = "";
$published = "";


if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $published = $post['published'];
}

if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);

    $_SESSION['message'] = 'Post deleted successfully!';
    $_SESSION['type'] = 'success';
    header("location: " . BASE_URL . "/admin/posts/index.php");
    exit;
}

if (isset($_POST['add_post'])) {
    $_POST['user_id'] = 1; // Set the user ID
    $_POST['published'] = 1; // Mark the post as published
    $errors = []; // Initialize an error array

    // image upload
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . str_replace(' ', '_', $_FILES['image']['name']);
        $destination = ROOT_PATH . "/assets/pic/" . $image_name;

        // Debugging: Check if the directory is writable
        if (!is_writable(ROOT_PATH . "/assets/pic/")) {
            echo "Directory is not writable: " . ROOT_PATH . "/assets/pic/";
            exit;
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }

    if (count($errors) === 0) {
        unset($_POST['add_post']);
        $post_id = create($table, $_POST);
        $_SESSION['message'] = 'Post created successfully!';
        $_SESSION['type'] = 'success';
        header("location: " . BASE_URL . "/admin/posts/index.php");
        exit;
    }
}

if (isset($_POST['update_post'])) {
    $errors = []; 

    // image upload
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . str_replace(' ', '_', $_FILES['image']['name']);
        $destination = ROOT_PATH . "/assets/pic/" . $image_name;

        // Debugging: Check if the directory is writable
        if (!is_writable(ROOT_PATH . "/assets/pic/")) {
            echo "Directory is not writable: " . ROOT_PATH . "/assets/pic/";
            exit;
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update_post'], $_POST['id']);
        $post_id = update($table, $id, $_POST);
        
        // Updated message to reflect post update
        $_SESSION['message'] = 'Post updated successfully!'; 
        $_SESSION['type'] = 'success';
        header("location: " . BASE_URL . "/admin/posts/index.php");
        exit;
    }
}