<?php include_once "../php/includes/get.inc.php"; ?>
<?php include_once "../php/includes/set.inc.php"; ?>
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
    <div class="container-fluid page-body-wrapper" style="margin-top: 5em">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include_once "partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Student</h4>
                  <span class="msg mb-3"></span>
                  <form class="forms-sample mt-3" method="post" id="edit_student_form" action="../php/includes/set.inc.php" enctype="multipart/form-data">
                    <?php 
                    if (isset($staff_student_profile)) {
                    foreach ($staff_student_profile as  $value) {?>
                    <div class="form-group">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $value["first_name"]?>">
                      <span class="text-danger font-weight-light err1"></span>
                    </div>
                    <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $value["last_name"]?>">
                      <span class="text-danger font-weight-light err2"></span>
                    </div>
                    <div class="form-group">
                        <label for="fname">S/G</label>
                        <input type="text" class="form-control" id="sg" placeholder="" name="sg" value="<?php echo $value["sg"]?>">
                        <span class="text-danger font-weight-light err10"></span>
                      </div>
                      <div class="form-group">
                        <label for="fname">State of Origin</label>
                        <input type="text" class="form-control" id="" name="state" placeholder="" value="<?php echo $value["state_of_origin"]?>">
                        <span class="text-danger font-weight-light err11"></span>
                      </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                          <option  selected><?php echo $value["gender"]?></option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                        <span class="text-danger font-weight-light err3"></span>
                    </div>
                    <div class="form-group">
                      <label for="gender">Date of Enlistment</label>
                      <input type="date" class="form-control" name="date_of_enlistment" placeholder="dd-mm-yy" value="<?php echo $value["date_of_enlistment"]?>">
                    </div>
                    <div class="form-group">
                      <label for="command">Command</label>
                      <input type="text" class="form-control" id="command" name="command" value="Abia">
                      <span class="text-danger font-weight-light err4"></span>
                    </div>
                    <div class="form-group">
                      <label for="gender">Date Last Promoted</label>
                      <input type="date" class="form-control" name="date_last_promoted" placeholder="dd-mm-yy" value="<?php echo $value["date_last_promoted"]?>" >
                    </div>
                    <div class="form-group">
                      <label for="gender">Qualification</label>
                      <input type="text" name="qualification"  class="form-control" value="<?php echo $value["qualification"]?>">
                    </div>
                    <div class="form-group">
                      <label for="command">AP Number</label>
                      <input type="text"  class="form-control" id="apnumber" name="apnumber" value="<?php echo $value["ap_number"]?>">
                      <span class="text-danger font-weight-light err5"></span>
                    </div> 
                    <div class="form-group">
                      <label for="command">AP Number</label>
                      <input type="number" class="form-control" id="apnumber" name="id" value="<?php echo $_GET['id']?>" hidden>
                      <span class="text-danger font-weight-light err5"></span>
                    </div>
                    <div class="form-group">
                      <label for="fname">Year of Birth</label>
                      <select class="form-control" name="year" id="he" required>
                        <option value="<?php echo $value["year_of_birth"]?>"><?php echo $value["year_of_birth"]?></option>
                      </select>
                      <span class="text-danger font-weight-light err12"></span>
                    </div>
                    <div class="form-group">
                      <label for="fname">Course Ends</label>
                      <input class="form-control" type="date"  name="leaves_on" value="<?php echo $value["course_ends"]?>">
                    </div>
                    <div class="form-group">
                      <label for="fname">Course Number</label>
                      <select class="form-control" name="course" required>
                        <option value="<?php echo $value["course_no"]?>"><?php echo $value["course_no"]?></option>
                        <option value="course 1">Course 1</option>
                        <option value="course 2">Course 2</option>
                        <option value="course 3">Course 3</option>
                        <option value="course 4">Course 4</option>
                        <option value="course 5">Course 5</option>
                        <option value="course 6">Course 6</option>
                      </select>
                      <span class="text-danger font-weight-light err12"></span>
                    </div>
                    <!-- <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default" value="images/face2.jpg">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="images/face2.jpg">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      <span class="text-danger font-weight-light err6"></span>
                    </div> -->
                    <button type="submit" class="btn btn-primary loading mr-2" name="edit_student">Save</button>
                    <a class="btn btn-danger" href="index.php">Cancel</a>
                  <?php } }?>
                  </form>
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
  <script src="js/set.js"></script>
  <script type="text/javascript">
    var max_date = 1950;
    var min_date = new Date().getFullYear() - 15;
    var select = document.getElementById("he");
    for (var i = max_date; i <= min_date; i++) {
      var opt = document.createElement('option');
      opt.value = i;
      opt.innerHTML = i;
      select.appendChild(opt);     
    }
  </script>
  <!-- End custom js for this page-->
</body>

</html>

