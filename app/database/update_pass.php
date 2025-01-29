<?php
include(ROOT_PATH . "/app/database/db.php");

// Get all users
$users = selectAll('users');

// Update each user's password to be hashed
foreach ($users as $user) {
    $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);
    update('users', $user['id'], ['password' => $hashedPassword]);
}

echo "All passwords have been hashed";
?>