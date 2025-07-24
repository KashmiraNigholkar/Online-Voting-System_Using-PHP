<?php
$host = "127.0.0.1";       // or "localhost"
$user = "root";
$password = "YES"; // 🔁 REPLACE THIS with the actual password
$database = "votings";

$connect = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
