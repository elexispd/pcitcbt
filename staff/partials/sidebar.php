<?php 

if (isset($get_exam_setter)) {
  foreach ($get_exam_setter as $value) {
    //check for courses with space
    $course = explode(' ', $value["course_title"]);
  ?>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index">
                <i class="typcn typcn-home menu-icon"></i>
                <span class="menu-title">Dashboard</span> 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-students">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Students</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-book menu-icon"></i>
                <span class="menu-title">Exam</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="review">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-exam?c_id=<?php echo strtolower($course[0]) ?>&l_id=<?php echo $value["lecturer_id"] ?>"> Add Questions </a></li>
                  <li class="nav-item"> <a class="nav-link" href="review-exam?c_id=<?php echo strtolower($course[0]) ?>&l_id=<?php echo $value["lecturer_id"] ?>  "> Review Questions </a></li>
                  <!-- <li class="nav-item"> <a class="nav-link" href="preview-exams.php?c_id=<?php echo strtolower($value["course_title"]) ?>&id=<?php echo $value["lecturer_id"] ?>">Previous Questions </a></li> -->
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#results" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-book menu-icon"></i>
                <span class="menu-title">Resuls</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="results">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="mca-scores?id=<?php echo $value["course_id"] ?>&cat=mca"> MCA Scores </a></li>
                  <li class="nav-item"> <a class="nav-link" href="exam-scores?id=<?php echo $value["course_id"] ?>&cat=exam"> Exam Scores </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-user menu-icon"></i>
                <span class="menu-title">Profile</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="profile">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="profile"> View Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="reset-password"> Change Password </a></li>
                </ul>
              </div>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="logout">
                <i class="typcn typcn-power menu-icon"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
  <?php } 
} else {?>
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="typcn typcn-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view-students.php">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Students</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-book menu-icon"></i>
                <span class="menu-title">Exam</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="review">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-exam.php"> Add Questions </a></li>
                  <li class="nav-item"> <a class="nav-link" href="review-exam.php?"> Review Questions </a></li>
                  <li class="nav-item"> <a class="nav-link" href="exam-scores.php?"> Exam Scores </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-user menu-icon"></i>
                <span class="menu-title">Profile</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="profile">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="profile.php"> View Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="reset-password.php"> Change Password </a></li>
                </ul>
              </div>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="typcn typcn-power menu-icon"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
<?php }

