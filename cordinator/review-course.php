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
    <!-- partial:partials/_navbar.php -->
    <?php include_once "partials/navbar.php"; ?>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper"  style="margin-top: 5em">
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <?php include_once "partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Available <?php echo $_GET["c_id"]; ?> Exams</h4>
<!--                   <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Category</th>
                          <th>Course Number</th>
                          <th>Year</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody> 
                        <?php $id = 0;
                          if ($get_review == 0) {
                             echo "No Active Question";
                          } else {
                          foreach ($get_review as $value) {?>
                            <tr>
                            <td><?php echo $id += 1; ?></td>
                            <td><?php echo strtoupper($value["category"]) ?></td>
                            <td><?php echo $value["course_no"] ?></td>
                            <td><?php echo $value["year"] ?></td>
                            <?php 
                                if ($value["status"] == 0) {?>
                                  <td><label class="badge badge-danger">Pending</label></td>
                                <?php } else if($value["status"] == 1) { ?>
                                   <td><label class="badge success" style="background: green; color: #fff;">Approved</label></td>
                                <?php }
                              ?>
                            <td>
                              <div class="d-flex align-items-center">
                                <a href="exam-q.php?c_id=<?php echo $c = strtolower($_GET["c_id"]) == 'microsoft word' ? 'word' : strtolower($_GET["c_id"]) ?>&co_id=<?php echo $_GET["co_id"] ?>&co_no=<?php echo $value['course_no']?>&cat=<?php echo $value["category"] ?>&st=<?php echo $value['status'] ?>" class="btn btn-info btn-sm btn-icon-text mr-3">
                                  Review
                                  <i class="typcn typcn-eye btn-icon-append"></i>
                                </a>
                              </div>  
                            </td>
                            </tr>
                          <?php } }
                         ?>                          
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
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

