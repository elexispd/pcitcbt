<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="typcn typcn-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="course_list">
              <i class="typcn typcn-book menu-icon"></i>
              <span class="menu-title">Courses</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#results" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-book menu-icon"></i>
                <span class="menu-title">Results</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="results">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="results?cat=mca"> MCA Score </a></li>
                  <li class="nav-item"> <a class="nav-link" href="results?cat=exam"> Exam Score </a></li>
                </ul>
              </div>
            </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="result.php">
              <i class="typcn typcn-book menu-icon"></i>
              <span class="menu-title">Exam Result</span>
            </a>
          </li> -->
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