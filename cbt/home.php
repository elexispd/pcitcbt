<?php //include_once "../php/includes/get.inc.php"; ?>
<?php //include_once "../php/includes/get_exam.inc.php"; ?>
<?php 
  session_start();
  if (!isset($_SESSION['student'])) {
    header("location:login.php");
  }
  $url = substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], "?"));
  $u = ($url == "?practice") ?  $url : '' ;
  $practice = ($url == "?practice") ? str_replace('?', '', $url) : '' ;

  include_once "../php/includes/get.inc.php"; 
?>
<!DOCTYPE html>
<html lang="en">

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
    label {font-size: 15px!important; line-height: 1.1em !important; margin-top: 1em !important;}
    /*label input {margin-top:  5em !important;}*/

      .card .card-title {
        font-size: 0.8em;
        margin-bottom: 0.8em;
      }
  </style>
</head>
<body>
  
  <div class="container-scroller">


    <div class="container-fluid page-body-wrapper">
        <div class="main-panel mx-auto">
        <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body container">
                  <img class="img-fluid"  src="<?php echo $get_student["photo"]?>" width="50"><h1 class="card-title d-inline ml-3" style="font-size: 12px;">Hello,  <?php echo "{$get_student["first_name"]} {$get_student["last_name"]}" ?></h1>
                  <h5 class="text-secondary ml-5 pl-3" style="font-size: 12px; margin-top: -15px;">Good Luck!</h5>
                  <form action="exam.php">
                    <div class="form-group mt-4">
                      <h6 style="font-size: 13px;">Select Course</h6>

                      <div class="alert alert-info" style="font-size: 12px;">
                        Please, Be mindful of your time by always checking the timer countdown. Failure to submit before your time elapses, the system would submit the questions you have already attempted.
                      </div>

                      <?php

                        foreach ($get_courses as  $value) {?>
                          <div class="form-check">
                            <label class="form-check-label">

                              <?php $course = explode(' ', ($value["course_title"])); ?>
                            <a id="<?php echo $c = strtolower($value["course_title"]) == 'microsoft word' ? 'word' : strtolower($value["course_title"]) ?>" href="exam?c_id=<?php echo $c = strtolower($value["course_title"]) == 'microsoft word' ? 'word' : strtolower($course[0]) ?>&id=<?php  echo $value['course_id']?>&c_no=<?php echo $get_student["course_no"];?><?php if($practice == 'practice'){
                              echo '&practice';} ?>" style="font-size: 12px;"> <?php
                                
                               echo strtolower($course[0]); 

                              ?>
                            </a> 
                            <input type="radio" name="course" class="form-check-input">
                            </label>
                          </div>
                       <?php  }
                      ?>
                      <a class="btn btn-info mt-2" href="exam_end<?php echo $u?>" style="font-size: 12px; padding: 8px;">Submit Exam</a> <br> <br>
                      <div class="alert alert-info"  style="font-size: 12px;">
                        Please, Click on "submit exam" button after you're done taking your exam.
                      </div>
                    </div>
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





  <!-- End custom js for this page-->
  <script src="js/timer.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {

     for (var i = 0; i < window.localStorage.length; i++) {
        var keyName = window.localStorage.key(i)
        if (localStorage.getItem(keyName) == 1) {
            $("#"+keyName).click(function(e) {
              e.preventDefault();
              $("#"+keyName).css('color', 'red');
            });
        };
     }
    
          
    });
  </script>
  
</body>

</html>

