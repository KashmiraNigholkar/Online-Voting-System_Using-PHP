<?php
session_start();
include('connect.php');

// Get form data
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

// Validate input
$check = mysqli_query($connect, "SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role'");

// Check if user exists
if (mysqli_num_rows($check) > 0) {
    $userdata = mysqli_fetch_array($check, MYSQLI_ASSOC);
    
    // Fetch all groups (users with role=2)
    $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
    $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    // Store in session
    $_SESSION['userdata'] = $userdata;
    $_SESSION['groupdata'] = $groupsdata;

    echo "
    <script>
        window.location.href = '../routes/dashboard.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Invalid Credentials or User not found');
        window.location.href = '../';
    </script>
    ";
}
?>
