<?php
session_start();

// Redirect if user not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Example session data structure (should be set during login)
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'User';
$group = isset($_SESSION['group']) ? $_SESSION['group'] : 'Not Assigned';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Dashboard</title>
    <link rel="stylesheet" href="stylesheet.css"> <!-- Make sure this file exists -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        #headerSection {
            background-color: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
        }
        #headerSection h1 {
            margin: 10px 0;
        }
        #logoutbtn, #backbtn {
            position: absolute;
            top: 20px;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }
        #backbtn {
            left: 20px;
            background-color: #6c757d;
            color: white;
        }
        #logoutbtn {
            right: 20px;
            background-color: #dc3545;
            color: white;
        }
        #Profile, #Group {
            margin: 30px auto;
            width: 90%;
            max-width: 600px;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div id="headerSection">
        <button id="backbtn" onclick="history.back()">Back</button>
        <button id="logoutbtn" onclick="location.href='logout.php'">Logout</button>
        <h1>Online Voting System</h1>
        <hr>
        <div id="Profile">
            <strong>Welcome,</strong> <?php echo htmlspecialchars($username); ?>
        </div>
        <div id="Group">
            <strong>Your Group:</strong> <?php echo htmlspecialchars($group); ?>
        </div>
    </div>
</body>
</html>
