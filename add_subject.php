<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';

    $name = $_POST['name'];
    $class_id = $_POST['class'];

    $sql = "INSERT INTO subjects (name, class_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $name, $class_id);

    if ($stmt->execute()) {
        header("location: show_subject.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>