<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';

    $class_id = $_POST['class'];
    $subject_id = $_POST['subject'];
    $exam_name = $_POST['exam_name'];
    $exam_date = $_POST['exam_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    $sql = "INSERT INTO exams (class_id, subject_id, exam_name, exam_date, start_time, end_time) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iissss", $class_id, $subject_id, $exam_name, $exam_date, $start_time, $end_time);

    if ($stmt->execute()) {
        header("location: show_exam.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>