<?php include_once "../php/includes/get.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PCIT Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
    
    <div class="container-fluid page-body-wrapper"  style="margin-top: 5em">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include_once "partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <h6 class="font-weight-light">Add A New Course</h6>
          <small>A course can be assigned to more than 1 lecturer</small>
              <form class="pt-3" method="post"id="assign_course_form" action="../php/includes/set.inc.php">
                <div class="msg"></div>
                <div class="form-group">
                  <label for="course">Course</label>
                  <select name="course" id="course" class="form-control" required>
                      <?php 
                        foreach ($get_courses as $value) {?>
                          <option value="<?php echo $value["course_id"] ?>" ><?php echo $value["course_title"];?></option>
                        <?php }
                      ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="to">Lecturer(s)</label>
                    <select name="lecturer[]" id="to" class="form-control js-example-basic-multiple" multiple="multiple">
                      <?php 
                        foreach ($get_staff as $staff) {?>
                          <option value="<?php echo $staff["lecturer_id"]?>"><?php echo $staff["first_name"]. ' '. $staff["last_name"]; ?></option>
                        <?php }
                      ?>  
                    </select>
                </div>
                <div class="mt-3">
                  <button type="submit" name="assign_course" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Assign</button>

                </div>
              </form>
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
  <script src="vendors/select2/select2.min.js"></script>
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
  <script src="js/select2.js"></script>
  <script src="js/set.js"></script>

  <!-- End custom js for this page-->
</body>

</html>

