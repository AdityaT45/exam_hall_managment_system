<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Print Allotment</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Show Print Allotment</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Class Name</th>
                    <th>Room Name</th>
                    <th>Student Roll Number</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'print_student_allotment.php'; ?>
            </tbody>
        </table>
    </div>
</body>

</html>