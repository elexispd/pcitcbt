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
                  <h4 class="card-title">Exams</h4>
<!--                   <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Course</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $id = 0;
                        if (empty($get_students)) {?>
                          <h4 class="text-secondary text-center">No Record Yet</h4>
                        <?php } else {
                          foreach ($get_courses as $value) {
                               $course = explode(' ', $value["course_title"]);
                            ?>
                            <tr>
                              <td><?php echo $id +=1; ?></td>
                              <td><?php echo $value["course_title"] ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <a href="review-course.php?c_id=<?php echo $c = strtolower($value["course_title"]) == 'microsoft word' ? 'word' : strtolower($course[0]) ?>&co_id=<?php echo $value["course_id"] ?>" class="btn btn-info btn-sm btn-icon-text mr-3">
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
                    <!--  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Course</th>
                          <th>Lecturer</th>
                          <th>Date Submitted</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Power Point</td>
                          <td> Elex Promise</td>
                          <td>29-06-2022</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="exam-q.php?exam_id=28" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                              <form method="post" id="approve_exam_form ">
                                <input type="number" name="exam_id" hidden>
                                <input type="date" name="exam_date" class="form-control">
                                <select class="form-control duration" name="exam_duration" required>
                                  <option disabled selected>Duration</option>
                                  <option value="30">30 Mins</option>
                                  <option value="60">1 Hr</option>
                                  <option value="90">1Hr 30 Mins</option>
                                </select>
                                <button type="submit" name="approve" class="btn btn-success btn-sm">Approve<i class="typcn typcn-tick btn-icon-append"></i></button>
                              </form>
                            </div>  
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Power Point</td>
                          <td>Database</td>
                          <td>29-06-2022</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="exam-q.php?exam_id=28" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                              <form method="post">
                                <input type="number" name="exam_id" hidden>
                                <input type="date" name="exam_date" class="form-control">
                                <select class="form-control duration" name="exam_duration" required>
                                  <option disabled selected>Duration</option>
                                  <option value="30">30 Mins</option>
                                  <option value="60">1 Hr</option>
                                  <option value="90">1Hr 30 Mins</option>
                                </select>
                                <input type="number" name="exam_id" hidden>
                                <button type="submit" name="approve" class="btn btn-success btn-sm">Approve<i class="typcn typcn-tick btn-icon-append"></i></button>
                              </form>
                            </div>  
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Excel</td>
                          <td> Elex Promise</td>
                          <td>29-06-2022</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="exam-q.php?exam_id=28" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                              <form method="post">
                                <input type="number" name="exam_id" hidden>
                                <input type="date" name="exam_date" class="form-control">
                                <select class="form-control duration" name="exam_duration" required>
                                  <option disabled selected>Duration</option>
                                  <option value="30">30 Mins</option>
                                  <option value="60">1 Hr</option>
                                  <option value="90">1Hr 30 Mins</option>
                                </select>
                                <input type="number" name="exam_id" hidden>
                                <button type="submit" name="approve" class="btn btn-success btn-sm">Approve<i class="typcn typcn-tick btn-icon-append"></i></button>
                              </form>
                            </div>  
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>MS Word</td>
                          <td> Elex Promise</td>
                          <td>29-06-2022</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="exam-q.php?exam_id=28" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                              <form method="post">
                                <input type="number" name="exam_id" hidden>
                                <input type="date" name="exam_date" class="form-control">
                                <input type="number" name="exam_id" hidden>
                                <select class="form-control duration" name="exam_duration" required>
                                  <option disabled selected>Duration</option>
                                  <option value="30">30 Mins</option>
                                  <option value="60">1 Hr</option>
                                  <option value="90">1Hr 30 Mins</option>
                                </select>
                                <button type="submit" name="approve" class="btn btn-success btn-sm">Approve<i class="typcn typcn-tick btn-icon-append"></i></button>
                              </form>
                            </div>  
                          </td>
                        </tr>                        
                      </tbody>
                    </table> -->
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

