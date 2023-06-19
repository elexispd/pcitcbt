<?php include_once "../php/includes/get.inc.php"; ?>
<?php include_once "../php/includes/get_exam.inc.php"; ?>
<?php if(!isset($_GET['c_id'])) {header("location:index.php");} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--  meta tags -->
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logo.png" />
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php include_once "partials/navbar.php" ?>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper" style="margin-top: 4em;">
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <?php include_once "partials/sidebar.php" ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <?php 

                if (isset($get_exam_setter)) {
                  foreach ($get_exam_setter as $value) { 
                  	$course = explode(' ', $value["course_title"]);
                  	?>
              <h4 class="text-secondary"> Add <?php echo $value["course_title"]; ?> Exam</h4>
              <div class="card">
                <div class="row justify-content-center">
                  <form method="post" class="col-md-6 mt-4" id="set_question_form" action="../php/includes/set_exam.inc.php">
                    <h4 class="msg mb-4"></h4>
                    <!-- <h5 id="question_no">Question   <?php echo($next_exam_no); ?></h5> -->
                    <div class="row mt-4">
                      <div class="col-md-8">
                        <div class="form-group">
                          <textarea class="form-control input" rows="10" placeholder="Type Question Here..." name="q" ></textarea>
                        </div>
                        <div class="form-group">
                          <h5>Options</h5>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">A</div>
                            </div>
                            <input type="text" class="form-control input" id="" name="opt1" placeholder="type here..." >
                          </div>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-info">B</div>
                            </div>
                            <input type="text" class="form-control input" id="" name="opt2" placeholder="type here..." >
                          </div>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">C</div>
                            </div>
                            <input type="text" class="form-control input" id="" name="opt3" placeholder="type here..." >
                          </div>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">D</div>
                            </div>
                            <input type="text" class="form-control input" id="" name="opt4" placeholder="type here..." >
                            <input type="number" name="lec_id" value="<?php echo $value['lecturer_id']; ?>" hidden>
                            <input type="number" name="c_id" value="<?php echo $value['course_id']; ?>" hidden>
                            <input type="text" name="course_name" value="<?php echo $course[0]; ?> " hidden>
                            <!-- <input type="text" name="q_no" value="<?php echo($next_exam_no); ?> " > -->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Choose Answer</label>
                            <select class="js-example-basic-single w-100 form-control" name="ans">
                              <option selected disabled>select answer</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <select class="js-example-basic-single w-100 form-control" name="course_no">
                            <option selected disabled>select course</option>
                            <option value="1">Course 1</option>
                            <option value="2">Course 2</option>
                            <option value="3">Course 3</option>
                            <option value="4">Course 4</option>
                            <option value="5">Course 5</option>
                            <option value="6">Course 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="js-example-basic-single w-100 form-control" name="category">
                            <option selected disabled>category</option>
                            <option value="mca">MCA</option>
                            <option value="exam">Exam</option>
                            <option value="practice">Practice</option>
                          </select>
                        </div>
                       
                        <button class="btn btn-success mb-4" type="submit" name="add_q">Save</button>
                      </div>
                    </div>           
                      <?php }
                } else {
                  echo "You have not been assigned any course";
                }
                ?>
                       
                  </form>
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
  <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.php5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/set_exam.js"></script>

  

  <!-- End custom js for this page-->

  <!-- <script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable({
          dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
        });
    } );
  </script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  
</body>

</html>

