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
  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php include_once "partials/navbar.php"; ?>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper" style="margin-top: 4em;">
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <?php include_once "partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="text-center pt-4">
                  <h4 class="msg"></h4>
                </div>
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table" id="table_id">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th>Name</th>
                        <th>Command</th>
                        <th>AP Number</th>
                        <th>Course</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                        if (empty($get_students)) {?>
                          <h4 class="text-secondary text-center">No Record Yet</h4>
                        <?php } else { $id = 0;
                        foreach ($get_students as $value) {?>
                          <td><?php echo $id += 1; ?></td>
                          <td><?php echo $value["first_name"]. " ". $value["last_name"]; ?></td>
                          <td><?php echo $value["command"]; ?></td>
                          <td><?php echo $value["ap_number"]; ?></td>
                          <td><?php echo $value["course_no"]; ?></td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="edit-student.php?id=<?php echo $value["ap_number"]; ?>" class="btn btn-success btn-sm btn-icon-text mr-3">
                                Edit
                                <i class="typcn typcn-edit btn-icon-append"></i>                          
                              </a>
                              <a href="student-profile.php?id=<?php echo $value["ap_number"]; ?>" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                              <form action="../php/includes/set.inc.php" method="post" id="del_form">
                                <input type="number" name="ap" value="<?php echo $value["ap_number"]; ?>" hidden>
                                <button type="submit" class="btn btn-danger btn-sm btn-icon-text" name="delete_student">
                                Delete
                                <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                              </button>
                              </form>
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
  <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> -->
  <script type="text/javascript" charset="utf8" src="../DataTables/datatables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/set.js"></script>
  

  <!-- End custom js for this page-->

  <script type="text/javascript">
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
  </script>
</body>

</html>

