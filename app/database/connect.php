<?php
$host = 'localhost';
$username = 'root'; // Supabase username
$password = ''; // Supabase password
$database = 'crmc'; // Supabase database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
