<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1);
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/additional/validationUser.php");

$users = selectAll('users');

$errors = array();
$username = '';
$password = '';

if (isset($_GET['id'])) {
    $table = 'users';
    $user = selectOne('users', ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'];
}

if (isset($_POST['create_user'])) {
    $errors = []; // Assuming you have a validation function for user creation
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Convert admin status to integer (0 or 1)
    $_POST['admin'] = isset($_POST['admin']) ? 1 : 0; // Assuming 'admin' is a checkbox

    if (count($errors) === 0) {
        // Store the password as is (without hashing)
        // $_POST['password'] = $hashedPassword; // Remove this line

        // Create the user in the database
        unset($_POST['create_user']);
        $user_id = create('users', $_POST);
        $_SESSION['message'] = 'User created successfully!';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/users/index.php');
        exit();
    }
}

if (isset($_POST['login-btn'])) {

    $errors = validateLogin($_POST);
    // $username = $_POST['username'];
    // $password = $_POST['password'];

    if (count($errors) === 0) {
        $user = selectOne('users', ['username' => $_POST['username']]);

        if ($user && $_POST['password'] === $user['password']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            $_SESSION['message'] = 'You are now logged in';
            $_SESSION['type'] = 'success';

            if ($_SESSION['admin']) {
                header('location: ' . BASE_URL . '/admin/users/index.php');
            } else {
                header('location: ' . BASE_URL . '/index.php');
            }
            exit();
        } else {
            array_push($errors, 'username or password incorrect');
        }
    }
}

if (isset($_GET['delete_id'])) {
    $table = 'users';
    $count = delete($table, $_GET['delete_id']);

    if ($count) {
        $_SESSION['message'] = 'User deleted successfully!';
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = 'Failed to delete user. User may not exist.';
        $_SESSION['type'] = 'error';
    }
    header("location: " . BASE_URL . "/admin/users/index.php");
    exit;
}


if (isset($_POST['update_user'])) {
    $errors = []; // Initialize an error array
    $table = 'users'; // Define the table variable
    $id = $_POST['id'] ?? null; // Retrieve the id from POST data instead of GET

    if ($id && count($errors) === 0) { // Check if id is set
        unset($_POST['passwordConf'], $_POST['update_user'], $_POST['id']);

        // Validate input
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0; // Convert admin status to integer
        $count = update($table, $id, $_POST);
        
        // Check if the update was successful
        if ($count) {
            $_SESSION['message'] = 'User updated successfully!';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/users/index.php');
            exit();
        } else {
            array_push($errors, 'Failed to update user.'); // Add error if update fails
        }
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $password = $_POST['password'];
    }
}
