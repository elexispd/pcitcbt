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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php include_once "partials/navbar.php"; ?>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper" style="margin-top: 5em">
      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <?php include_once "partials/sidebar.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table" id="table_id">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>username</th>
                        <th>Position</th>
                        <th>Gender </th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $id = 0;
                        foreach ($get_staff as $value) {?>
                          <td><?php echo $id += 1; ?></td>
                          <td><?php echo $value["first_name"]. " ". $value["last_name"]; ?></td>
                          <td><?php echo $value["role"]; ?></td>
                          <td><?php echo $value["username"]; ?></td>
                          <td><?php echo $value["position"]; ?></td>
                          <td><?php echo $value["gender"]; ?></td>
                          <td>
                            <div class="d-flex align-items-center">
                              <a href="edit-staff.php?user=<?php echo $value["username"]; ?>" class="btn btn-success btn-sm btn-icon-text mr-3">
                                Edit
                                <i class="typcn typcn-edit btn-icon-append"></i>                          
                              </a>
                              <a href="staff-profile.php?user=<?php echo $value["username"]; ?>" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-eye btn-icon-append"></i>                          
                              </a>
                              <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                                Delete
                                <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                              </button>
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
        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <script>document.write(new Date().getFullYear());</script> . All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">From Corper Promise</span>
                    </div>
                </div>    
            </div>        
        </footer>
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
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  

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

