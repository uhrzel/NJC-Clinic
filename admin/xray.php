<?php include 'config/session.php'; ?>
<?php include 'includes/count.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NJC - Dental Clinic | Schedule List</title>

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
              <a href="generate_bill.php" class="nav-link ">
                <i class="nav-icon fas fa-file-invoice-dollar"></i> <!-- Icon for Generate Bill -->
                <p>
                  Generate Bill
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="xray.php" class="nav-link active">
                <i class="nav-icon fas fa-x-ray"></i> <!-- Icon for X-Ray -->
                <p>
                  X-Ray
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="feedbacks.php" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i> <!-- Icon for X-Ray -->
                <p>
                  Feedbacks
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
    <!-- View X-ray Modal -->
    <div class="modal fade" id="viewXrayModal" tabindex="-1" role="dialog" aria-labelledby="viewXrayModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewXrayModalLabel">View X-ray</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Content for viewing X-ray details -->
            <div class="row">
              <div class="col-md-12">
                <img id="viewXrayImage" class="img-fluid" src="" alt="X-ray Image">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <p id="viewPatientName"></p>
                <p id="viewDateUploaded"></p>
                <!-- Additional schedule details -->
                <p id="viewAge"></p>
                <p id="viewBirth"></p>
                <p id="viewGender"></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <!-- Button to close the modal -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- Button to submit or generate the bill receipt -->
          </div>
        </div>
      </div>
    </div>



    <!-- Upload X-ray Modal -->
    <div class="modal fade" id="uploadXrayModal" tabindex="-1" role="dialog" aria-labelledby="uploadXrayModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="uploadXrayModalLabel">Upload X-ray</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Form for uploading X-ray -->
            <form id="uploadXrayForm" enctype="multipart/form-data">
              <div class="form-group">
                <label for="patientName">Patient Name:</label>
                <select class="form-control" id="patientName" name="patientName" required>
                  <option value="">Select Patient</option>
                  <!-- PHP code to fetch patient names and populate dropdown -->
                  <?php
                  include 'config/conn.php';
                  $sql = "SELECT CONCAT(firstname, ' ', middlename, ' ', lastname) AS patient_name, patient_id FROM patient";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['patient_id'] . "'>" . $row['patient_name'] . "</option>";
                  }
                  ?>
                </select>
              </div>
              <!-- Hidden field for patient ID -->
              <input type="hidden" id="patientId" name="patientId">
              <div class="form-group">
                <label for="xrayImage">X-ray Image:</label>
                <input type="file" class="form-control-file" id="xrayImage" name="xrayImage" accept="image/*" required>
              </div>
              <button type="button" class="btn btn-primary" id="submitXray">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="background-container"></div>
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Xray List</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Xray List</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- X-ray Table -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <!-- <h3 class="card-title">X-ray List</h3> -->
                  <!-- Button to open the modal for adding X-ray -->
                  <button class="btn btn-primary ml-auto" onclick="openAddXrayModal()">Upload X-ray</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="xrayTable" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Patient Name</th>
                        <th>X-ray Image</th>
                        <th>Birth</th>
                        <th>Gender</th>
                        <th>XRAY-Image</th>
                        <th>Date Uploaded</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Include your database connection
                      include 'config/conn.php';

                      // Fetch data from the x-ray table and join with the patients table
                      $sql = "SELECT xray_table.*, 
        CONCAT(patient.firstname, ' ', patient.middlename, ' ', patient.lastname) AS patient_name,
        patient.age,
        patient.birth,
        patient.gender
        FROM xray_table 
        INNER JOIN patient ON xray_table.patient_id = patient.patient_id;
";
                      $result = mysqli_query($conn, $sql);

                      // Check if there are any rows returned
                      if ($result && mysqli_num_rows($result) > 0) {
                        // Loop through each row and display data in table rows
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['xray_id'] . "</td>";
                          echo "<td>" . $row['patient_name'] . "</td>";
                          echo "<td>" . $row['age'] . "</td>"; // Display the age
                          echo "<td>" . $row['birth'] . "</td>"; // Display the birth date
                          echo "<td>" . $row['gender'] . "</td>"; // Display the gender
                          echo "<td><img src='" . $row['xray_image'] . "' alt='X-ray Image' style='max-width: 200px; max-height: 200px; cursor: pointer;' onclick='openModal(\"" . $row['xray_image'] . "\")'></td>";
                          echo "<td>" . $row['date_uploaded'] . "</td>";
                          // Action icons (view or download)
                          echo "<td>";
                          echo "<a href='#' class='btn btn-sm btn-primary' onclick='openViewModal(\"" . $row['xray_image'] . "\", \"" . $row['patient_name'] . "\", \"" . $row['date_uploaded'] . "\", \"" . $row['age'] . "\", \"" . $row['birth'] . "\", \"" . $row['gender'] . "\")'><i class='fas fa-eye'></i> View</a>";
                          echo "</td>";
                          echo "</tr>";
                        }
                      } else {
                        // If no rows returned, display a message
                        echo "<tr><td colspan='8'>No X-rays found</td></tr>";
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
      $('#xrayTable').DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      });
    });
  </script>
  <script>
    function openViewModal(imageSrc, patientName, dateUploaded, age, birth, gender) {
      var modalImage = document.getElementById('viewXrayImage');
      var modalPatientName = document.getElementById('viewPatientName');
      var modalDateUploaded = document.getElementById('viewDateUploaded');
      var modalAge = document.getElementById('viewAge');
      var modalBirth = document.getElementById('viewBirth');
      var modalGender = document.getElementById('viewGender');

      modalImage.src = imageSrc;
      modalPatientName.textContent = "Patient Name: " + patientName;
      modalDateUploaded.textContent = "Date Uploaded: " + dateUploaded;
      modalAge.textContent = "Age: " + age;
      modalBirth.textContent = "Birth Date: " + birth;
      modalGender.textContent = "Gender: " + gender;

      $('#viewXrayModal').modal('show'); // Show the modal
    }
  </script>


  <script>
    // Function to open upload X-ray modal
    function openAddXrayModal() {
      $('#uploadXrayModal').modal('show'); // Using jQuery to show the modal
    }
  </script>
  <script>
    $(document).ready(function() {
      $('#patientName').change(function() {
        // Get the selected patient ID and set it to the hidden input field
        $('#patientId').val($(this).val());
      });

      $('#submitXray').click(function() {
        var formData = new FormData($('#uploadXrayForm')[0]); // Get form data including file

        $.ajax({
          url: 'upload_xray.php',
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
            // Handle success response
            Swal.fire({
              icon: 'success',
              title: 'X-ray Uploaded!',
              text: 'The X-ray image has been uploaded successfully.',
              showConfirmButton: false,
              timer: 1500
            }).then(function() {
              location.reload(); // Reload the page
            });
            // Optionally, close the modal or perform any other action
          },
          error: function(xhr, status, error) {
            // Handle error
            Swal.fire({
              icon: 'error',
              title: 'Upload Failed!',
              text: xhr.responseText
            });
          }
        });
      });
    });
  </script>

</body>

</html>