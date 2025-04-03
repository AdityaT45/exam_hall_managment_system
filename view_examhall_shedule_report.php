<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Logout functionality
if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Exam Hall Managment Systrm</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    <h3>EHMS</h3>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Interface</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudent"
                    aria-expanded="false" aria-controls="collapseStudent">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Student Management</span>
                </a>
                <div id="collapseStudent" class="collapse" aria-labelledby="headingStudent"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_student_html.php">Add Student</a>
                        <a class="collapse-item" href="show_student_html.php">View Student</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeacher"
                    aria-expanded="false" aria-controls="collapseTeacher">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Teacher Management</span>
                </a>
                <div id="collapseTeacher" class="collapse" aria-labelledby="headingTeacher"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_teacher_html.php">Add Teacher</a>
                        <a class="collapse-item" href="show_teacher_html.php">View Teacher</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClass"
                    aria-expanded="false" aria-controls="collapseClass">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Class Management</span>
                </a>
                <div id="collapseClass" class="collapse" aria-labelledby="headingClass" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_class_html.php">Add Class</a>
                        <a class="collapse-item" href="show_class_html.php">View Class</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubject"
                    aria-expanded="false" aria-controls="collapseSubject">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Subject Management</span>
                </a>
                <div id="collapseSubject" class="collapse" aria-labelledby="headingSubject"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_subject_html.php">Add Subject</a>
                        <a class="collapse-item" href="show_subject.php">View Subject</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRoom"
                    aria-expanded="false" aria-controls="collapseRoom">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>room Management</span>
                </a>
                <div id="collapseRoom" class="collapse" aria-labelledby="headingSubject"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_room_html.php">Add room</a>
                        <a class="collapse-item" href="show_room.php">View room</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExam"
                    aria-expanded="false" aria-controls="collapseExam">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Exam Management</span>
                </a>
                <div id="collapseExam" class="collapse" aria-labelledby="headingExam" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_exam_html.php">Add Exam</a>
                        <a class="collapse-item" href="show_exam.php">View Exam</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExama"
                    aria-expanded="false" aria-controls="collapseExama">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Exam Allotment Management</span>
                </a>
                <div id="collapseExama" class="collapse" aria-labelledby="headingExam" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_allotment_html.php">Add Allotment</a>
                        <a class="collapse-item" href="show_student_allotment.php">View Allotment</a>
                    </div>
                </div>
            </li>




            <!-- Nav Item - Utilities Collapse Menu -->


            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Report Managment</div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwosr"
                    aria-expanded="true" aria-controls="collapseTwosr">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Student Report Managment</span>
                </a>
                <div id="collapseTwosr" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_allotment_html.php">Add Student Report</a>
                        <a class="collapse-item" href="view_examhall_shedule_report.php">View Student Report</a>
                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwosra"
                    aria-expanded="true" aria-controls="collapseTwosra">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Teacher Report Managment</span>
                </a>
                <div id="collapseTwosra" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Action:</h6>
                        <a class="collapse-item" href="add_teacher_allotment_html.php">Add Teacher Report</a>
                        <a class="collapse-item" href="show_teacher_allotment.php">View Teacher Report</a>
                    </div>
                </div>
            </li>




        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->




                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['email']; ?>
                                    </< /span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">


                                <div class="dropdown-divider"></div>

                                <form method="post" action="">
                                    <span type="submit" name="logout"><i
                                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</span>
                                </form>
                                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a> -->
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Select Exam</h1>

                    </div>


                    <form action="show_allotment.php" method="GET">
                        <label for="exam_id">Select Exam:</label>
                        <select name="exam_id" id="exam_id">
                            <?php
                            include 'db_connect.php';

                            $sql = "SELECT id, exam_name FROM exams";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id'] . "'>" . $row['exam_name'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>No exams available</option>";
                            }

                            $conn->close();
                            ?>
                        </select>
                        <button type="submit">Submit</button>
                    </form>


                    <!-- Content Row -->



                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->



    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>