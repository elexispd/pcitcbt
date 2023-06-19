<?php include_once "../php/includes/get.inc.php"; ?>
<?php include_once "../php/includes/get_exam.inc.php"; ?>
<?php if(!isset($_GET['c_id'])) {header("location:index.php");} ?>
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
    
    <div class="container-fluid page-body-wrapper"  style="margin-top: 5em">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include_once "partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo ucwords($_GET['c_id']) . " " . ucwords($_GET['cat']) ?></h4>
<!--                   <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p> -->
                  <div class="table-responsive pt-3">
                    <span class="msg"></span>
                    <table class="table table-bordered mt-4">
                      <thead>
                        <tr>
                          <th>
                            S/N
                          </th>
                          <th>
                           Questions
                          </th>
                          <th>
                           Course
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $id = 0;
                          if (($get_questions) !== "No Active Question") {
                            foreach ($get_questions as  $value) {?>
                             <tr>
                              <td>
                                <?php echo  $id +=1; ?>
                              </td>
                              <td>
                                <?php echo $value["question"] ?>
                              </td>
                              <td><?php echo $value["course_no"] ?></td>
                            <tr>
                          <?php }

                        ?>
                       <tr>
                          <?php 
                            if ($_GET["st"] == 0) {?>
                              <label class="badge badge-danger  btn-sm btn-icon-text mr-3">Pending</label>
                              <td> <label class="badge badge-info btn-sm btn-icon-text mr-3">ACTIONS &rarr;</label></td>
                          <td>
                            <div class="d-flex align-items-center">
                             
                              <form method="post" id="approve_exam_form" action="../php/includes/set_exam.inc.php">
                                <input type="number" name="co_no" value="<?php echo $value['course_no'] ?>" hidden required>
                                <input type="number" name="c_id" value="<?php echo $value['course_id'] ?>" hidden required>
                                <input type="text" name="course_name" value="<?php echo $_GET['c_id'] ?>" hidden required>
                                <input type="text" name="cat" value="<?php echo $_GET['cat'] ?>" hidden required>
                                <input type="date" name="exam_date" class="form-control">
                                <select class="form-control duration" name="exam_duration" required>
                                  <option disabled selected>Duration</option>
                                  <option value="300">5 Mins</option>
                                  <option value="600">10 Mins</option>
                                  <option value="1200">20 Mins</option>
                                  <option value="1800">30 Mins</option>
                                  <!-- <option value="3600">1 Hr</option>
                                  <option value="5400">1Hr 30 Mins</option> -->
                                </select>
                                <button type="submit" name="approve" class="btn btn-success approve btn-sm">Approve<i class="typcn typcn-tick btn-icon-append"></i></button>
                              </form>
                            </div>  
                          </td>
                            <?php } else if($_GET["st"] == 1) { ?>
                              <label class="badge success" style="background: green; color: #fff;">Approved</label>
                            <?php }
                          ?>
                        </tr>
                        <?php   } else {
                            echo $get_questions;
                          } ?>
                          
                          
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
  <script src="js/set_exam.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

