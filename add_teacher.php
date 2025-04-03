<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connect.php';

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class']; // Added class field

    // Prepare SQL statement
    $sql = "INSERT INTO teachers (name, email, phone, class) VALUES (?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $class); // Updated to include class parameter

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to success page
        header("location: show_teachers.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
}
?>