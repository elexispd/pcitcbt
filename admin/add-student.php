<!DOCTYPE html>
<html lang="en">

<head>
  <!--  meta tags -->
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
                  <h4 class="card-title">Course Participant Registration</h4>
                  <p class="card-description">
                    Input all fields
                  </p>
                  <form class="forms-sample" action="../php/includes/set.inc.php" method="post" id="register_student_form" enctype="multipart/form-data">
                    <span class="msg mb-3"></span>
                    <div class="form-group mt-4">
                      <label for="fname">First Name</label>
                      <input required type="text" class="form-control" id="fname"  name="fname" placeholder="First Name">
                      <span class="text-danger font-weight-light err1"></span>
                    </div>
                    <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input required type="text" class="form-control" id="lname" name="lname"  placeholder="Last Name">
                      <span class="text-danger font-weight-light err2"></span>
                    </div>
                     <div class="form-group">
                        <label for="fname">S/G</label>
                        <input required type="text" class="form-control" id="sg" placeholder="" name="sg" >
                        <span class="text-danger font-weight-light err10"></span>
                      </div>
                      <div class="form-group">
                        <label for="fname">State of Origin</label>
                        <input  type="text" class="form-control" id="sg" placeholder="" name="state" >
                        <span class="text-danger font-weight-light err11"></span>
                      </div>

                    <div class="form-group">
                      <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                        <span class="text-danger font-weight-light err3"></span>
                    </div>
                    <div class="form-group">
                      <label for="gender">Date of Enlistment</label>
                      <input required type="date" class="form-control" name="date_of_enlistment" placeholder="dd-mm-yy">
                    </div>
                    <div class="form-group">
                      <label for="command">Command</label>
                      <input  type="text" class="form-control" id="command" name="command" placeholder="Command">
                      <span class="text-danger font-weight-light err4"></span>
                    </div>
                    <div class="form-group">
                      <label for="gender">Date Last Promoted</label>
                      <input required type="date" class="form-control" name="date_last_promoted" placeholder="dd-mm-yy">
                    </div>
                    <div class="form-group">
                      <label for="gender">Qualification</label>
                      <input required type="text" name="qualification"  class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="command">Position</label>
                      <select class="form-control" id="position" required name="position">
                        <option value="police" selected>Police</option>
                        <option value="civilian">Civilian</option>
                      </select>
                      <span class="text-danger font-weight-light err4"></span>
                    </div>
                    <div class="form-group">
                      <label for="command">AP Number</label>
                      <input required type="number" pattern="[0-9]*" class="form-control" id="apnumber" name="apnumber" placeholder="AP/Force Number">
                      <span class="text-danger font-weight-light err5"></span>
                    </div>
                    <div class="form-group">
                      <label for="fname">Year of Birth</label>
                      <select class="form-control" name="year" id="he" required>
                        <option value="" selected>---select year---</option>
                      </select>
                      <span class="text-danger font-weight-light err12"></span>
                    </div>
                    <div class="form-group">
                      <label for="fname">Course Ends</label>
                      <input class="form-control" type="date" name="leaves_on" required>
                    </div>
                    <div class="form-group">
                      <label for="fname">Course Number</label>
                      <select class="form-control" name="course" required>
                        <option value = "" selected >---select Course number---</option>
                        <option value="1">Course 1</option>
                        <option value="2">Course 2</option>
                        <option value="3">Course 3</option>
                        <option value="4">Course 4</option>
                        <option value="5">Course 5</option>
                        <option value="6">Course 6</option>
                      </select>
                      <span class="text-danger font-weight-light err12"></span>
                    </div>
                    <!-- <div class="form-group">
                      <label>File upload</label>
                      <input  type="file" name="image" class="form-control file-upload-info">
                      <span class="text-danger font-weight-light err6"></span>
                    </div> -->
                    <button type="submit" class="btn btn-primary mr-2 loading" name="register">Register</button>
                    <button class="btn btn-danger">Cancel</button>
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
  <!-- <script src="js/file-upload.js"></script> -->
  <!-- End custom js for this page-->
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

  <script type="text/javascript">
    /*generate ap number for civilians*/
  $("#position").change(function(event) {
    var date = new Date().getTime();
    var value = $(this).val();
    if (value == "civilian") {
      $("#apnumber").val(date);
    } else{
      $("#apnumber").val("");
    }
  });

  </script>
</body>

</html>

