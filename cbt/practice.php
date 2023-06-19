<?php include_once "php/includes/get.inc.php"; ?>
<?php include_once "php/includes/get_exam.inc.php"; ?>

<?php 
  if (!isset($_SESSION["student"])) {
    // header("location:login.php");
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
    label {font-size: 15px !important; line-height: 1.1em !important; margin-top: 0 !important;}
    .form-group {
  margin-bottom: 0!important;
}
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


    <div class="container-fluid page-body-wrapper">
        <div class="main-panel mx-auto">
        <div class="content-wrapper">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <img class="img-fluid"  src="<?php echo $get_student["photo"]?>" width="50"><h1 class="card-title d-inline ml-3">Hello,  <?php echo "{$get_student["first_name"]} {$get_student["last_name"]}" ?></h1>
                  <h6 class="text-secondary ml-5 pl-3">Good Luck!</h6>
                  <form method="post" action="php/includes/set_exam.inc.php" class="w-50 mx-auto" id="form">

                    <?php 
                       // $t = isset($_GET['t']) ? "d" : $_GET['t'];
                       if (empty($get_e_questions)) {
                          echo "No Exam Yet";
                      } elseif ($get_e_questions == 1) {?>
                        <h4>You have taken this exam. Choose another course</h4>
                          <div class="mx-auto mt-3 mb-5">
                            <a class="btn btn-info" href="index.php">Take Another Course</a>
                          </div>
                      <?php } else { ?>

                    <div class="counter">
                        <div class="input">
                          <input type="number" id="num" class="form-control"  min="0" hidden name="time">
                          <select id="measure" class="form-control" hidden>
                            <option value="s">Seconds</option>
                          </select>
                          </div>
                          <div id="timer" class="col-12">
                            <div class="clock-wrapper">
                              <div class="text-primary text-center">Time Remaining</div>
                              <span class="hours">00</span>
                              <span class="dots">:</span>
                              <span class="minutes">00</span>
                              <span class="dots">:</span>
                              <span class="seconds">00</span>
                          </div>
                        </div>
                    </div>
                    
                    <h3 class="text-center text-primary pt-3" style="font-size: 1.5em;">English Exam</h3>
                    <span class="get" hidden=""><?php echo "exam"?></span>                     
                  

                        <div class="paginate">
                          <div class="items">
                            <?php 
                              $no = 0; 
                                foreach ($get_e_questions as $key => $value) {?>
                                  <div>
                                    <h1 class="card-title  mt-3 ml-2">Question <?php echo $no += 1 ?></h1>
                                    <div class="col-12">
                                      <div class="form-group">
                                        <h5 class="mb-4"><?php echo $value["question"] ?></h5>
                                        <input type="" name="q_id" value="<?php echo $value["question_id"]?>" hidden>
                                        
                                        <input type="" name="s_id" value="<?php echo $_SESSION['student']; ?>" hidden>

                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="ans[<?php echo $value["question_id"] ?>]" id="optionsRadios1" value="A">
                                            <?php echo $value["option_a"] ?>
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="ans[<?php echo $value["question_id"] ?>]" id="optionsRadios2" value="B">
                                            <?php echo $value["option_b"] ?>
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="ans[<?php echo $value["question_id"] ?>]" id="optionsRadios2" value="C">
                                            <?php echo $value["option_c"] ?>
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="ans[<?php echo $value["question_id"] ?>]" id="optionsRadios2" value="D">
                                            <?php echo $value["option_d"] ?>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="text" name="cat" value="<?php echo $value['category']; ?>" hidden>
                                <?php }
                            
                            ?>
                            
                          </div>
                          <div class="pager">
                            <div class="pageNumbers"></div>
                            <br><br>
                            <div class="previousPage btn btn-info">PREVIOUS</div>
                            <div class="nextPage btn btn-info">NEXT</div>
                            <div class="ab"></div>
                            <button type="submit" class="btn btn-info btn-small" id="submitt" name="submit_exam" style="padding: 5px;">Submit</button>
                            <input type="text" name="submit_exam" value="submit_exam" hidden>
                          </div>
                        </div>
                        
                    <!-- </div> --> <?php } ?>
                  </form>
 
      
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


  


  <script>
      $(function() {
        $(".paginate").paginga({
          // use default options
        });
        
        $(".paginate-page-2").paginga({
          page: 2
        });

        $(".paginate-no-scroll").paginga({
          scrollToTop: false
        });
      });

       $("#submit").hide();

      s = function s() {
        var next = $(".nextPage");
        if(next.hasClass("disabled")) {
          $("#submitt").show();
          $(".nextPage").hide();
        } else {
          $("#submitt").hide();
          $(".nextPage").show();
        }
      } 
     
      setInterval(s, 10)
    </script>


    <script>

        // var exam_name = $(".get").text();
        var exam_name = $(".get").text();

        if (localStorage.getItem(exam_name) === null) {
          var init = <?php echo $get_duration["duration"]?>;
          // var init = 90;
           $("#num").val(init);
          localStorage.setItem(exam_name, init);
        } else {
          var count =  parseInt(localStorage.getItem(exam_name));
           $("#num").val(count);

        }


        function submit_form() {
          var form = document.getElementById("form");
          form.submit();
        }
        

        var count =  parseInt(localStorage.getItem(exam_name));
      
      
        var counter = setInterval(timer, 1000)

        function timer() {
            count = count -1;
            if (count <= 0) {
                clearInterval(counter);
                $("form").submit();
                submit_form();
                // window.location = "index.php"
                return;
            } else {
            }
            localStorage.setItem(exam_name, count);
            $("#num").val(count);
            
        }


      
     
        

        
    // });
  </script>

  
  <!-- endinject -->
  <!-- Custom js for this page-->
  
</body>

</html>

