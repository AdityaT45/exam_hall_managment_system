<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';

    $class_id = $_POST['class'];
    $subject_id = $_POST['subject'];
    $exam_id = $_POST['exam'];
    $room_id = $_POST['room'];

    echo "class id".$class_id."<br>";
    echo "sub id".$subject_id."<br>";
    echo "exam id".$exam_id."<br>";
    echo "room id".$room_id."<br>";
    // Check if room has available seats
    $available_seats = 0;
   
    $sql = "SELECT strength FROM rooms WHERE room_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $available_seats = $row['strength'];
    }

    // Check how many students have been allotted the room
    $sql = "SELECT COUNT(*) as count FROM allotments WHERE room_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $allotted_students = $row['count'];
    }

    $stmt->close();

    // If room has available seats and not all students have been allotted, make allotments
    if ($available_seats > 0 && $allotted_students < $available_seats) {
        // Fetch student IDs who have not been allotted a seat
        $sql = "SELECT student_id FROM students WHERE student_id NOT IN (SELECT student_id FROM allotments) LIMIT ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $available_seats);
        $stmt->execute();
        $result = $stmt->get_result();
        echo "Number of available students: " . $result->num_rows;

        // Insert allotments into the database
        $sql = "INSERT INTO allotments (class_id, subject_id, exam_id, room_id, student_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiiii", $class_id, $subject_id, $exam_id, $room_id, $student_id);

        while ($row = $result->fetch_assoc()) {
            $student_id = $row['student_id'];
            echo "Inserting allotment for student: " . $student_id;
            $stmt->execute();
        }

        $stmt->close();

        header("location: show_allotment.php");
        exit();
    } else {
        echo "No available seats in the room.";
    }

    $conn->close();
}
?>