<?php
session_start();

// Check if the user is NOT logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Dashboard</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div id="headerSection">
        <button id="backbtn">Back</button>
        <button id="logoutbtn" onclick="location.href='logout.php'">Logout</button>
        <h1>Online Voting System</h1>
        <hr>
        <div id="Profile"></div>
        <div id="Group"></div>
    </div>
</body>
</html>
