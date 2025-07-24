<?php
include("connect.php");

// Collecting form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password']; // <- make sure this field is in your HTML form
$address = $_POST['address'];
$role = $_POST['role'];

// Handling the uploaded image
$image = $_FILES['photo']['name'];
$temp_name = $_FILES['photo']['tmp_name'];

if ($password == $confirm_password) {
    // Upload image to "uploads" directory
    move_uploaded_file($temp_name, "../uploads/$image");

    // Insert into database
    $insert = mysqli_query($connect, "INSERT INTO user (name, mobile, password, address, photo, role) 
                                      VALUES ('$name', '$mobile', '$password', '$address', '$image', '$role')");

    if ($insert) {
        echo "<script>
                alert('Registration Successful!');
                window.location='../routes/login.html';
              </script>";
    } else {
        echo "<script>
                alert('Database Error: Registration Failed');
                window.location='../routes/register.html';
              </script>";
    }
} else {
    echo "<script>
            alert('Password and Confirm Password do not match!');
            window.location='../routes/register.html';
          </script>";
}
?>
