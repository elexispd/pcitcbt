<?php include_once "../php/includes/get.inc.php"; ?>
<?php include_once "../php/includes/get_exam.inc.php"; ?>
<!-- attend to this comment later -->
<?php //if(!isset($_GET['c_id'])) {header("location:index.php");} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PCIT Staff</title>
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
                  <h4 class="card-title"><?php echo substr($get_table, 0, strpos($get_table, "_") )?></h4>
<!--                   <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p> -->
                  <div class="row">
                        <div class="form-group col-md-3 d-flex ml-3">
                          <select class="form-control" name="year">
                            <option value="><?php echo date('Y') ?>"><?php echo date('Y') ?></option>
                            <!-- <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option> -->
                          </select>
                          <select class="form-control ml-3" name="course">
                            <<!-- option value="course 4">Course 4</option>
                            <option value="course 3">Course 3</option>
                            <option value="course 2">Course 2</option> -->
                            <option value="<?php echo($get_course_num); ?>">Course <?php echo($get_course_num); ?></option>
                          </select>
                        </div>
                      </div>
                  <div class="table-responsive">
                    <table class="table table-hover" id="table_id">
                      <span class="msg text-success"></span>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Question</th>
                          <th>Course</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $id = 0;
                          foreach ($get_questions as $value) { ?>
                            <tr>
                              <td><?php echo $id +=1; ?></td>
                              <td><?php echo $value["question"] ?></td>
                              <td><?php echo $value["course_no"] ?></td>
                              <td><?php strtoupper(echo $value["category"]) ?></td>
                              <?php 
                                if ($value["status"] == 0) {?>
                                  <td><label class="badge badge-danger">Pending</label></td>
                                <?php } else if($value["status"] == 1) { ?>
                                   <td><label class="badge success">Approved</label></td>
                                <?php }
                              ?>
                              
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="exam-questions.php?c_id=<?php echo $_GET["c_id"] ?>&id=<?php echo $_GET["id"] ?>&co_no=<?php echo $value["course_no"] ?>&year=<?php echo $value['year'] ?>" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                            </div>
                          </td>
                            </tr>
                          <?php }
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
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/set.js"></script>
 <script type="text/javascript">
    // var stat = $(".status");
    // if (stat.text() == 0) {
    //     stat.text("Pending");
    //     stat.addClass("badge-danger");
    // } else if(tat.text() == 1) {
    //     stat.text("Approved");
    //     stat.addClass("badge-success");
    // }
  </script>
  <!-- End custom js for this page-->
</body>

</html>

