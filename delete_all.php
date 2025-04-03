<?php
// Include database connection
include 'db_connect.php';

// Delete all records from the allotments table
$sql_delete_allotments = "DELETE FROM allotments";
if ($conn->query($sql_delete_allotments) === TRUE) {
    echo "All records deleted from the allotments table successfully.<br>";
} else {
    echo "Error deleting records from the allotments table: " . $conn->error . "<br>";
}

// Delete all records from the teacher_allotments table
$sql_delete_teacher_allotments = "DELETE FROM teacher_allotment";
if ($conn->query($sql_delete_teacher_allotments) === TRUE) {
    echo "All records deleted from the teacher_allotments table successfully.<br>";
} else {
    echo "Error deleting records from the teacher_allotments table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
