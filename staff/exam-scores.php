<?php 
  include_once "../php/includes/get.inc.php";
  include_once "../php/includes/get_exam.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exam Scores</title>
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
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-secondary">Exam Scores</h4>
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table" id="table_id">
                    <!-- <form method="post">
                      <div class="row">
                        <div class="form-group col-md-3 d-flex ml-3">
                          <select class="form-control" name="year">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                          </select>
                          <select class="form-control ml-3" name="course">
                            <option value="course 4">Course 4</option>
                            <option value="course 3">Course 3</option>
                            <option value="course 2">Course 2</option>
                            <option value="course 1">Course 1</option>
                          </select>
                        </div>
                      </div>
                    </form> -->
                       <thead>
                        <tr>
                          <th class="ml-5">ID</th>
                          <th>Name</th>
                          <th><?php echo "{$value["course_title"]} Score" ?></th>
                      </thead>
                      <tbody>
                      <?php $id = 0;
                       foreach ($course_result as $key => $value) { ?>
                        <tr>
                          <td><?php echo $id += 1; ?></td>
                          <td><?php echo "{$value["first_name"]} {$value["last_name"]}" ?></td>
                          <td><?php echo $value["exam_score"]; ?></td>
                        </tr>
                      <?php  } ?>
                    </tbody>
                   
                  </table>
                </div>
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

