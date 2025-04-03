<?php
// Include database connection
include 'db_connect.php';

// Check if student ID is provided in the URL parameter
if(isset($_GET['id'])) {
    // Fetch student ID
    $student_id = $_GET['id'];

    // Delete student record from the database
    $sql = "DELETE FROM students WHERE student_id = $student_id";
    if ($conn->query($sql) === TRUE) {
        // Student deleted successfully
        echo "Student deleted successfully.";
    } else {
        // Error deleting student
        echo "Error deleting student: " . $conn->error;
    }
} else {
    // Student ID not provided
    echo "Student ID not provided.";
}
?>
