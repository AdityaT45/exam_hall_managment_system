<?php
// Include database connection
include 'db_connect.php';

// Check if student ID is provided in the URL parameter
if(isset($_GET['id'])) {
    // Fetch student details based on the provided ID
    $student_id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE student_id = $student_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Student found, fetch details
        $row = $result->fetch_assoc();
        $role_number = $row['role_number'];
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
    } else {
        // Student not found
        echo "Student not found.";
        exit;
    }
} else {
    // Student ID not provided
    echo "Student ID not provided.";
    exit;
}
?>

<!-- Update Student Form -->
<form id="updateStudentForm">
    <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
    <div class="form-group">
        <label for="role_number">Role Number:</label>
        <input type="text" class="form-control" id="role_number" name="role_number" value="<?php echo $role_number; ?>" required>
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<script>
    // JavaScript to handle update and delete modals
$(document).ready(function() {
    // Update modal
    $('#updateModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var studentId = button.data('student-id');
        var modal = $(this);
        modal.find('.modal-body').load('update_student_form.php?id=' + studentId);
    });

    // Delete modal
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var studentId = button.data('student-id');
        var modal = $(this);
        modal.find('.modal-footer #deleteButton').attr('href', 'delete_student.php?id=' + studentId);
    });
});

</script>