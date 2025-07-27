<?php
session_start();
if (!isset($_SESSION['user_id'])) {
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
        <button id="backbtn" onclick="history.back()">Back</button>
        <button id="logoutbtn" onclick="location.href='logout.php'">Logout</button>
        <h1>Online Voting System</h1>
        <hr>
        <div id="Profile">
            <?php echo "Welcome, " . htmlspecialchars($_SESSION['username']); ?>
        </div>
        <div id="Group">
            <?php echo "Group: " . htmlspecialchars($_SESSION['group']); ?>
        </div>
    </div>
</body>
</html>
