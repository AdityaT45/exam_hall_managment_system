<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';

    $name = $_POST['name'];
    $strength = $_POST['strength'];

    $sql = "INSERT INTO rooms (name, strength) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $name, $strength);

    if ($stmt->execute()) {
        header("location: show_room.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>