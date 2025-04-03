<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are correct
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email and password match the credentials
    if ($email === 'admin@gmail.com' && $password === 'admin') {
        // Authentication successful, create session
        $_SESSION['email'] = $email;
        // Redirect to homepage
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error message
        $_SESSION['error'] = "Invalid email or password";
        header("Location: login.php");
        exit();
    }
}
?>