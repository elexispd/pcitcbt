<?php include_once "../php/includes/get.inc.php"; ?>
<?php include_once "../php/includes/get_exam.inc.php"; ?>
<?php //if(!isset($_GET['c_id'])) {header("location:index.php");} ?>
<?php 
  if (isset($_SESSION['good'])) {?>
    <script type="text/javascript">alert(<?php echo $_SESSION['good'] ?>)</script>
  <?php } else {?>
      <script type="text/javascript">alert(<?php echo "sorry" ?>)</script>
  <?php }
  if (!isset($_SESSION["student"])) {
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en"  style="overflow: scroll !important;">

<head>
  <!--  meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PCIT Exam</title>
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
  <style type="text/css">
    label {font-size: 15px !important; line-height: 1.1em !important; margin-top: 1em !important;}
    .red {
      color: red;
    }
    /*label input {margin-top:  5em !important;}*/
  </style>
  <style>

      body {
        background: #f4f5fa !important;
      }
      .items div 
      {
        /*border: 1px solid gray;*/
        /*margin: 5px;*/
        /*padding: 10px;*/
      }

      .pager div
      {
        float: left;
        /*margin: 5px;*/
        padding: 5px;
      }
      .nextPage {
        margin-left: 10px;
      }

      .pager div.disabled
      {
        opacity: 0.25;
      }

      .pager .pageNumbers a
      {
        display: inline-block;
        padding: 0 6px;
        color: #fff;
        border-radius: 50%;
        background: blue;
        margin-left: .2em;
        margin-right: .2em;
        font-size: 12px;
      }

      .pager .pageNumbers a.active
      {
        background: yellow;
        color: 000;
      }

      .card .card-title {
        font-size: 0.8em;
        margin-bottom: 0.8em;
      }
    </style>
  </head>
</head>
<body>
  
  <div class="container-scroller">

<!-- style="margin-top: 4em;" -->
    <div class="container-fluid page-body-wrapper" >
        <div class="main-panel mx-auto">
        <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <img class="img-fluid"  src="<?php echo $get_student["photo"]?>" width="50"><h1 class="card-title d-inline ml-3">Hello,  <?php echo "{$get_student["first_name"]} {$get_student["last_name"]}" ?></h1> <br> <br>
                  <div class="alert alert-info text-center text-light"  style="font-size: 12px; background:  rgb(20,20,160);">
                        Hello,  <?php echo "{$get_student["first_name"]} {$get_student["last_name"]}" ?>, We are pleased to show you how you performed
                    </div>
                    <ul style="font-size: 18px;">
                      <li>Total Questions : <?php echo $_SESSION["total_q"]; ?></li>
                      <li>Attempted Questions : <?php echo $_SESSION["att"]; ?></li>
                      <li class="<?php echo $_SESSION["score"] >= ($_SESSION["total_q"]/2) ? 'text-success' : 'text-danger' ?>">Score: <?php echo $_SESSION["score"]; ?></li>
                      <li>Time Used : 
                        <?php 
                          $t = 
                          $hr = floor($_SESSION["time"]/3600);
                          $min = str_pad(floor($_SESSION["time"]/60), 2, '0', STR_PAD_LEFT);
                          if ($_SESSION["time"] > 1) {
                            $sec = str_pad($_SESSION["time"] - ($hr * 3600) - ($min * 60), 2, '0', STR_PAD_LEFT) ;
                          } else {
                            $sec = 00;
                          }                          
                          echo "{$hr}0 : {$min} : {$sec}";
                        ?>
                      </li>

                    </ul>
                    <a class="btn btn-info mt-2" href="home.php?practice" style="font-size: 12px; padding: 8px;">Take Exam</a>
                </div> 
              </div>
            </div>
        <!-- partial:partials/_footer.html -->
        <?php include_once "partials/footer.php"; ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>

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
  <script src="js/paginga.jquery.js"></script>





  <!-- End custom js for this page-->
  <script src="js/timer.js"></script>


  
</body>

</html>

