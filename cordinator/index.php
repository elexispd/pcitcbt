<?php include_once "../php/includes/get.inc.php"; ?>
<?php include_once "../php/includes/get_exam.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PCIT Cordinator</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="css/vertical-layout-light/custom.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once "partials/navbar.php"; ?>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-start">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Main Dahboard</p>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include_once "partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Active Students</p>
                      <h1 class="mb-0"><?php echo $no_active_students; ?></h1>
                    </div>
                    <i class="typcn typcn-group icon-xl text-secondary"></i>
                  </div>
                  <canvas id="expense-chart" height="80"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Lecturers</p>
                      <h1 class="mb-0"><?php echo $total_staff; ?></h1>
                    </div>
                    <i class="typcn typcn-group icon-xl text-secondary"></i>
                  </div>
                  <canvas id="expense-chart" height="80"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th>Name</th>
                        <th>Command</th>
                        <th>AP/F No.</th>
                        <th>Gender</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $id = 0;
                        foreach ($get_students_index as $value) { ?>
                          <tr>
                            <td><?php echo $id +=1; ?></td>
                            <td><?php echo $value["first_name"]. " ". $value["last_name"]; ?></td>
                            <td><?php echo $value["command"]?></td>
                            <td><?php echo $value["ap_number"]?></td>
                            <td><?php echo $value["gender"]?></td>
                          </tr>
                       <?php  }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once "partials/footer.php"; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

