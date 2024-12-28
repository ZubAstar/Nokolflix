<?php
require_once 'DBconnect.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['add_name'];
    $username = $_POST['add_u_name'];
    $email = $_POST['add_email'];
    $password = $_POST['add_password'];
    $confirm_password = $_POST['add_c_password'];

    // Check if the passwords match
    if ($password !== $confirm_password) {
        // Show an alert if passwords don't match and redirect
        echo "<script>
            alert('Passwords do not match!');
            window.location.href = 'signUp.php';
        </script>";
        exit();
    }

    // SQL query to insert user data
    $sql = "INSERT INTO user (email, username, name, password) VALUES ('$email', '$username', '$name', '$password')";
    $result = mysqli_query($conn, $sql);

    // Check if the insertion was successful
    if (mysqli_affected_rows($conn)) {
        // Redirect to payment.php on success
        echo "<script>
            alert('User registered successfully!');
            window.location.href = 'payment.php';
        </script>";
    } else {
        // Show an alert if insertion failed and redirect
        echo "<script>
            alert('User registration failed. Please try again.');
            window.location.href = 'signUp.php';
        </script>";
    }
}
?>

