<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .card-header {
            background-color: #f4f6f9;
        }
        .widget {
            margin-bottom: 1.5rem;
        }
        .overview-card .card-header {
            background-color: #007bff;
            color: #fff;
        }
        .recent-activities-card .card-header {
            background-color: #28a745;
            color: #fff;
        }
        .alerts-notifications-card .card-header {
            background-color: #ffc107;
            color: #000;
        }
        .widget ul {
            padding-left: 0;
            list-style: none;
        }
        .widget ul li {
            margin-bottom: 0.5rem;
        }
        .widget .card-body {
            font-size: 1rem;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout()">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Student Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#registrationModal">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Student Registrations</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reports.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Summary Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card widget overview-card">
                                <div class="card-header">
                                    <h3 class="card-title">Overview</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <span>Total Students:</span>
                                        <strong>2</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total Grade 1-6 Pupils:</span>
                                        <strong>0</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total Grade 7-12 Students:</span>
                                        <strong>0</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total Freshmen:</span>
                                        <strong>0</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total Sophomores:</span>
                                        <strong></strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total Juniors:</span>
                                        <strong>2</strong>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total Seniors:</span>
                                        <strong>0</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activities Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card widget recent-activities-card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Activities</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-user-edit"></i> Eira I. Bongalos is in Junior level.</li>
                                        <li><i class="fas fa-user-edit"></i> Arlene B. Bongalos is in Junior level.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Alerts and Notifications Card -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card widget alerts-notifications-card">
                                <div class="card-header">
                                    <h3 class="card-title">Alerts & Notifications</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i> Parent-Teacher Meeting scheduled for Oct 5, 2024.</li>
                                        <li><i class="fas fa-info-circle"></i> New school policies updated for 2024 academic year.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Modal for Registration -->
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Student Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="studentId">Student ID</label>
                            <input type="text" class="form-control" id="studentId" placeholder="Enter student ID" required>
                        </div>

                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" required>
                        </div>

                        <div class="input-group">
                            <select id="grade" name="grade" required>
                                <option value="">Select Grade/Year Level</option>
                                <!-- Elementary Grades -->
                                <option value="1">Grade 1</option>
                                <option value="2">Grade 2</option>
                                <option value="3">Grade 3</option>
                                <option value="4">Grade 4</option>
                                <option value="5">Grade 5</option>
                                <option value="6">Grade 6</option>
                                <!-- High School Grades -->
                                <option value="7">Grade 7</option>
                                <option value="8">Grade 8</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                                <!-- College Year Levels -->
                                <option value="freshman">Freshman</option>
                                <option value="sophomore">Sophomore</option>
                                <option value="junior">Junior</option>
                                <option value="senior">Senior</option>
                            </select>
                            <small class="error-message" id="gradeError"></small>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" rows="3" placeholder="Enter address" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="parentGuardian">Parent/Guardian Name</label>
                            <input type="text" class="form-control" id="parentGuardian" placeholder="Enter parent/guardian name" required>
                        </div>

                        <div class="form-group">
                            <label for="contactNumber">Contact Number</label>
                            <input type="tel" class="form-control" id="contactNumber" placeholder="Enter contact number" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

    <script>
        function logout() {
            // Optionally, clear any session data here if using local storage/session storage
            // localStorage.clear();
            // sessionStorage.clear();
            
            // Redirect to login page
            window.location.href = "{{ route('login') }}";
        }
    </script>
</body>
</html>


</div>
