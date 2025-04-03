<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';

    // Retrieve form data
    $room_id = isset($_POST['room']) ? $_POST['room'] : '';
    $subject_id = isset($_POST['subject']) ? $_POST['subject'] : '';
    $teacher_id = isset($_POST['teacher']) ? $_POST['teacher'] : '';

    // Insert data into teacher allotment table
    $insert_query = "INSERT INTO teacher_allotment (room_id, subject_id, teacher_id) VALUES (?, ?, ?)";
    $stmt_insert = $conn->prepare($insert_query);
    $stmt_insert->bind_param("iii", $room_id, $subject_id, $teacher_id);

    if ($stmt_insert->execute()) {
        header("location: show_teacher_allotment.php");
        exit();
    } else {
        echo "Error inserting teacher allotment: " . $stmt_insert->error;
    }

    $stmt_insert->close();
} else {
    echo "Error: Form not submitted.";
}
?>