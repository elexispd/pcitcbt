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
              <form class="pt-3" method="post" id="add_course_form" action="../php/includes/set.inc.php">
                <div class="msg"></div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="course_name" id="pass" placeholder="course name" >
                </div>
                <div class="mt-3">
                  <button type="submit" name="add_course" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Add</button>
                </div>
              </form>

            <h6 class="font-weight-light mt-5">Add A New Course Number</h6>
              <form class="pt-3" method="post" id="add_course_number_form" action="../php/includes/set.inc.php">
                <div class="msg2"></div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" name="year" id="year" disabled>                
                </div>
                <div class="form-group">
                  <select name="course_num" class="form-control">
                    <option disabled selected>---Select Course Number-----</option>
                    <option value="1">Course one</option>
                    <option value="2">Course Two</option>
                    <option value="3">Course Three</option>
                    <option value="4">Course Four</option>
                    <option value="5">Course Five</option>
                    <option value="6">Course Six</option>
                  </select>                
                </div>
                <div class="mt-3">
                  <button type="submit" name="add_course_no" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Add Course Number</button>
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
  <script src="js/set.js"></script>
  <script type="text/javascript">
    // const m = new Date();
    var year = new Date().getFullYear()
   document.getElementById("year").value = new Date().getFullYear();
  </script>

  <!-- End custom js for this page-->
</body>

</html>

