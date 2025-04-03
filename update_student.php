<?php
// Include database connection
include 'db_connect.php';

// Check if form is submitted and student ID is provided
if(isset($_POST['student_id'])) {
    // Fetch form data
    $student_id = $_POST['student_id'];
    $role_number = $_POST['role_number'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Update student record in the database
    $sql = "UPDATE students SET role_number = '$role_number', name = '$name', email = '$email', phone = '$phone' WHERE student_id = $student_id";
    if ($conn->query($sql) === TRUE) {
        // Update successful
        echo "Student updated successfully.";
    } else {
        // Error updating student
        echo "Error updating student: " . $conn->error;
    }
} else {
    // Student ID not provided
    echo "Student ID not provided.";
}
?>
