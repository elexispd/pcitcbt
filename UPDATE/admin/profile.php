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
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Admin Profile</h4>
                  <?php foreach ($profile as  $value) {?>
                      <div class="row">
                        <div class="col-md-12 col-lg-4">
                          <img src="<?php echo $value['photo']?>" class="profile-img img-fluid">
                        </div>
                        <div class="col-md-12 col-lg-8">
                          <label class="font-weight-bold">Name : </label> <span class="ml-3"><?php echo $value["first_name"]. " ". $value["last_name"] ?></span> <br> <br>
                          <label class="font-weight-bold">Role : </label> <span class="ml-3"><?php echo $value["role"]?></span> <br> <br>
                          <label class="font-weight-bold">Username : </label> <span class="ml-3"><?php echo $value["username"]?></span> <br> <br>
                          <label class="font-weight-bold">Date OF Enlistment : </label> <span class="ml-3"><?php echo $value["date_of_employment"]?></span> <br> <br>
                          <label class="font-weight-bold">Gender : </label> <span class="ml-3"><?php echo $value["gender"]?></span> <br> <br>
                          <label class="font-weight-bold">State of origin : </label> <span class="ml-3"><?php echo $value["state"]?></span> <br> <br>
                          <label class="font-weight-bold">Qualification : </label> <span class="ml-3"><?php echo $value["qualification"]?></span> <br> <br>
                          <label class="font-weight-bold">Year of birth : </label> <span class="ml-3"><?php echo $value["year_of_birth"]?></span> <br> <br>
                          <label class="font-weight-bold">Date OF Promotion : </label> <span class="ml-3"><?php echo $value["date_of_promotion"]?></span> <br> <br>
                          <label class="font-weight-bold">SG : </label> <span class="ml-3"><?php echo $value["position"]?></span> <br> <br>
                        </div>
                    </div>
                    <?php } ?>
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
  <!-- End custom js for this page-->
</body>

</html>

