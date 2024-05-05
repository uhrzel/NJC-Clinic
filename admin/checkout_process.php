<?php include 'config/session.php'; ?>
<?php include 'includes/count.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NJC - Dental Clinic | Produce Schedule</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        /* bgstyle.css */
        .background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: url(office.jpg);
            background-size: cover;
            background-position: center;
            filter: blur(2.5px);
            opacity: 0.7;
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .content {
            background-color: transparent;
            padding: 20px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"><strong>NJC - DENTAL CLINIC INFORMATION AND BILLING SYSTEM</strong></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard.php" class="brand-link">
                <img src="../dist/img/care.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">NJC - Dental Clinic</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Staff</a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="patient_register.php" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i> <!-- Icon for Patient's Register -->
                                <p>
                                    Patient's Register
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="produce_schedule.php" class="nav-link">
                                <i class="nav-icon fas fa-calendar-alt"></i> <!-- Icon for Produce Schedule -->
                                <p>
                                    Produce Schedule
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="checkout_process.php" class="nav-link active">
                                <i class="nav-icon fas fa-calendar-alt"></i> <!-- Icon for Produce checkout -->
                                <p>
                                    Checkout
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="generate_bill.php" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i> <!-- Icon for Generate Bill -->
                                <p>
                                    Generate Bill
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="xray.php" class="nav-link">
                                <i class="nav-icon fas fa-x-ray"></i> <!-- Icon for X-Ray -->
                                <p>
                                    X-Ray
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-engine-alt"></i>
                                <p>
                                    Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>Logout</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="change_password.php" class="nav-link">
                                        <i class="nav-icon fas fa-key"></i>
                                        <p>Change Password</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Include PayPal JavaScript SDK -->
        <script src="https://www.paypal.com/sdk/js?client-id=<?php echo $paypalClientId; ?>&currency=PHP"></script>

        <script>
            var paypalButtonRendered = false;

            // Function to render PayPal button with dynamic amount
            function renderPayPalButton(amount) {
                if (!paypalButtonRendered) {
                    paypal.Buttons({
                        createOrder: function(data, actions) {
                            // This function sets up the details of the transaction, including the amount and line item details
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: amount,
                                        currency: 'PHP' // Specify currency as PHP
                                    }
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            // This function captures the funds from the transaction
                            return actions.order.capture().then(function(details) {
                                // Send the PayPal Order ID to your server for further processing
                                document.getElementById('paypal-order-id').value = data.orderID;
                                // Submit the form
                                document.getElementById('editPatientForm').submit();
                            });
                        }
                    }).render('#paypal-button-container');

                    paypalButtonRendered = true;
                }
            }

            // Listen for changes in the payment input field
            document.getElementById('editPatientPayment').addEventListener('input', function() {
                var paymentAmount = (parseFloat(this.value) * 100).toFixed(0); // Convert to cents and round to nearest integer
                renderPayPalButton(paymentAmount);
            });
        </script>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="background-container"></div>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>checkout process</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Checkout process</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Patients Table -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Patients List</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="patientsTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Birth</th>
                                                <th>Gender</th>
                                                <th>Contact</th>
                                                <th>Postal Code</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- PHP code for fetching patients -->
                                            <?php
                                            // Include your database connection
                                            include 'config/conn.php';

                                            // Fetch data from the patients table
                                            $sql = "SELECT * FROM patient";
                                            $result = mysqli_query($conn, $sql);

                                            // Check if there are any rows returned
                                            if (mysqli_num_rows($result) > 0) {
                                                // Loop through each row and display data in table rows
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['patient_id'] . "</td>";
                                                    echo "<td>" . $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'] . "</td>";
                                                    echo "<td>" . $row['age'] . "</td>";
                                                    echo "<td>" . $row['birth'] . "</td>"; // Adding Date of Birth
                                                    echo "<td>" . $row['gender'] . "</td>"; // Adding Gender
                                                    echo "<td>" . $row['contactnumber'] . "</td>"; // Adding Contact Number
                                                    // echo "<td></td>";
                                                    echo "<td>" . $row['postalcode'] . "</td>"; // Adding Postal Code

                                                    // Action icons (update and delete)
                                                    echo "<td>";
                                                    // Edit button
                                                    echo "<a href='#' class='editPatient btn-sm btn-info' data-id='" . $row['patient_id'] . "' data-firstname='" . $row['firstname'] . "' data-lastname='" . $row['lastname'] . "'  data-middlename='" . $row['middlename'] . "' data-toggle='modal' data-target='#editPatientModal'><i class='fas fa-calendar-plus'></i> Checkout</a>&nbsp;&nbsp;";

                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                // If no rows returned, display a message
                                                echo "<tr><td colspan='13'>No patients found</td></tr>";
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->


        </div>
        <!-- /.content-wrapper -->

        <?php include 'includes/footer.php'; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <script src="../dist/js/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#patientsTable').DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });
    </script>

</body>

</html>