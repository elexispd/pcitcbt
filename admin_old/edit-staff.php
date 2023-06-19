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
                  <h4 class="card-title">Edit Staff</h4>
                  <form class="forms-sample" method="post" action="../php/includes/set.inc.php" id="update_staff_form" enctype="multipart/form-data">
                    <?php foreach ($staff_profile as  $value) {?>
                    <span class="msg mb-3"></span>
                    <div class="form-group">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" id="fname"  name="fname" placeholder="First Name" required value="<?php echo $value["first_name"]; ?>">
                      <span class="text-danger font-weight-light err1"></span>
                    </div>
                    <div class="form-group">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" id="lname"  name="lname" placeholder="Last Name" required value="<?php echo $value["last_name"]; ?>">
                      <span class="text-danger font-weight-light err2"></span>
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div> -->
                    <!-- <div class="form-group">
                      <label for="exampleInputPassword4">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="username" required  value="<?php echo $value["username"]?>" disabled>
                    </div> -->
                    <input type="text" class="form-control" id="username" name="username" placeholder="username" required  value="<?php echo $value["username"]?>" hidden>
                    <div class="form-group">
                        <label for="fname">State of Origin</label>
                        <input  type="text" class="form-control" id="sg" placeholder="" name="state"  value="<?php echo $value["state"]?>">
                        <span class="text-danger font-weight-light err11"></span>
                      </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                          <option value="<?php echo $value['gender']?>"> <?php echo $value["gender"]?></option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                        <span class="text-danger font-weight-light err3"></span>
                    </div>
                    <div class="form-group">
                      <label for="command">Role</label>
                      <select class="form-control" id="position" required name="role">
                        <option selected>----Select Position----</option>
                        <option selected value="<?php echo $value["role"]; ?>"><?php echo $value["role"]; ?></option>
                        <option value="admin">Admin</option>
                        <option value="cordinator">Course cordinator</option>
                        <option value="lecturer">Lecturer</option>
                      </select>
                      <span class="text-danger font-weight-light err4"></span>
                    </div>
                    <div class="form-group">
                      <label for="command">Position</label>
                      <select class="form-control" id="position" required name="position">
                        <option selected>----Select Position----</option>
                        <option selected value="<?php echo $value["position"]; ?>"><?php echo $value["position"]; ?></option>
                        <option selected value="police">Police</option>
                        <option value="civilian">Civilian</option>
                      </select>
                      <span class="text-danger font-weight-light err4"></span>
                    </div>
                    <div class="form-group">
                      <label for="gender">Qualification</label>
                      <input required type="text" name="qualification"  class="form-control" value="<?php echo $value["qualification"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="fname">Year of Birth</label>
                      <select class="form-control" name="year" id="he" required>
                        <option value="" selected>---select year---</option>
                        <option value="<?php echo $value["year_of_birth"]; ?>" selected><?php echo $value["year_of_birth"]; ?></option>
                      </select>
                      <span class="text-danger font-weight-light err12"></span>
                    </div>
                    <div class="form-group">
                      <label for="gender">Date of Enlistment</label>
                      <input  type="date" class="form-control" name="date_of_enlistment" placeholder="dd-mm-yy" value="<?php echo $value["date_of_employment"]; ?>">
                    </div>
                    <div class="form-group">
                      <label for="gender">Date Last Promoted</label>
                      <input  type="date" class="form-control" name="date_last_promoted" placeholder="dd-mm-yy" value="<?php echo $value["date_of_promotion"]; ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="edit_staff">Update</button>
                    <button class="btn btn-danger">Cancel</button>
                  <?php } ?>
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
  <script src="js/dashboard.js"></script>
  <script src="js/set.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

