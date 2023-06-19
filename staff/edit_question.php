<?php include_once "../php/includes/get.inc.php"; ?>
<?php include_once "../php/includes/get_exam.inc.php"; ?>
<?php if(!isset($_GET['c_id'])) {header("location:index.php");} ?>
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
  <style>
    #set_as_new {
      position: absolute !important;
      right:24%;
      top: 44.6%;
      max-width: 110px;
    }
    @media (max-width: 992px) {
      #set_as_new {
        right:24%;
        top: 86.3%;
      }
    }
  </style>
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
                  <div class="row justify-content-center">
                  <?php 
                    foreach ($get_questions_edit as  $value) {?>
                       <form method="post" class="col-md-6 mt-4" id="edit_question_form" action="../php/includes/set_exam.inc.php">
                    <h4 class="msg mb-4"></h4>
                    <h5 id="question_no">Question   <?php //echo($value["q_no"]); ?></h5>
                    <div class="row mt-4">
                      <div class="col-md-8">
                        <div class="form-group">
                          <textarea class="form-control" rows="10" placeholder="Type Question Here..." name="q" required> <?php echo($value["question"]);?></textarea>
                        </div>
                        <div class="form-group">
                          <h5>Options</h5>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">A</div>
                            </div>
                            <input type="text" class="form-control" id="" name="opt1" placeholder="type here..." value=" <?php echo($value["option_a"]); ?>" required>
                          </div>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-info">B</div>
                            </div>
                            <input type="text" class="form-control" id="" name="opt2" placeholder="type here..." value=" <?php echo($value["option_b"]); ?>" required>
                          </div>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">C</div>
                            </div>
                            <input type="text" class="form-control" id="" name="opt3" placeholder="type here..." value=" <?php echo($value["option_c"]); ?>" required>
                          </div>
                          <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">D</div>
                            </div>
                            <input type="text" class="form-control" id="" name="opt4" placeholder="type here..." value=" <?php echo($value["option_d"]); ?>" required>
                            <input type="text" name="course_name" value="<?php echo $_GET['c_id'].'_exam'; ?> " hidden>
                            <input type="text" name="q_id" value="<?php echo $_GET['q_id']?> " hidden>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Choose Answer</label>
                            <select class="js-example-basic-single w-100 form-control" name="ans">
                              <option  disabled>---select answer---</option>
                              <option selected value="<?php echo $value["answer"] ?>"><?php echo $value["answer"] ?></option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <select class="js-example-basic-single w-100 form-control" name="course_no" id="c_no_new">
                            <!-- <option selected disabled>---select course number---</option> -->
                            <option selected value="<?php echo $value["course_no"]; ?>">Course <?php echo $value["course_no"]; ?></option>
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
                            <option selected value="<?php echo $value["category"]; ?>"><?php echo strtoupper($value["category"]); ?></option>
                            <?php if($value["category"] == "mca") {?>
                              <option value="exam">Exam</option>
                            <?php } else {?>
                              <option value="mca">MCA</option>
                              <option value="practice">Practice</option>
                            <?php }?>
 
                          </select>
                        </div>
                        <div class="form-group">
                          <?php 
                            if ($_GET["sta"] == 1) { ?>
                              <input type="number" class="form-control" name="year" value="<?php echo $value['year'] ?>">
                            <?php } else { ?>
                              <input type="number" class="form-control" name="year" value="<?php echo $value['year'] ?>" hidden>
                            <?php }
                          ?>
                            
                        </div>
                         
                        <div class="d-flex justify-content-between">
                          <?php 
                            if ($_GET["sta"] == 0) { ?>
                              <input class="btn btn-success mb-4 px-3" type="submit" name="edit_q" value="Update">
                            <?php }
                          ?>
                          <!-- Extra inputs for setting as new -->
                          <input type="number" name="c_id" value="<?php echo $value["course_id"] ?>" hidden>
                          <input type="number" name="lec_id" value="<?php echo $value["lecturer_id"] ?>" hidden >
                          <input class="btn btn-success mb-4 px-3 mx-2" type="submit" name="add_new" value="Set As New">
                        </div>
                    </div>                                  
                  </form>
                  
                   <?php  }
                  ?>
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
  <script src="js/set_exam.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

