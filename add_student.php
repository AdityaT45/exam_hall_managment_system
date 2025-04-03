<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include 'db_connect.php';

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role_number = $_POST['role_number']; // Add role_number to form data

    // Prepare SQL statement
    $sql = "INSERT INTO students (name, email, phone, role_number) VALUES (?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $phone, $role_number); // Add 'i' for integer type

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to success page
        header("location: show_students.php");
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