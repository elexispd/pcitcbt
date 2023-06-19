<?php include_once "../php/includes/get.inc.php"; ?>
<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
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
              <h4 class="text-secondary">Students List</h4>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <!-- <form method="post">
                      <div class="row">
                        <div class="form-group col-md-3 d-flex ml-3">
                          <select class="form-control" name="year" disabled>
                            <option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>tion>
                          </select>
                          <select class="form-control ml-3" name="course" disabled>
                            <option value="course 4">Course <?php echo($get_course_num); ?></option>
                          </select>
                        </div>
                      </div>
                    </form> -->
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th>Name</th>
                        <th>Command</th>
                        <th>Gender </th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $id = 0;
                        foreach ($get_students_view as $value) {?>
                          <td><?php echo $id += 1; ?></td>
                          <td><?php echo $value["first_name"]. " ". $value["last_name"]; ?></td>
                          <td><?php echo $value["command"]; ?></td>
                          <td><?php echo $value["gender"]; ?></td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="student-profile.php?id=<?php echo $value["ap_number"]; ?>" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                            </div>
                          </td>
                        </tr>
                       <?php }
                      ?>
                      <tr>
                        
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

