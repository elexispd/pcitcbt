<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="typcn typcn-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-student" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-group menu-icon"></i>
              <span class="menu-title">Students</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-student">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add-student">Add Student</a></li>
                <li class="nav-item"> <a class="nav-link" href="view-students">View Students</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-course" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-document menu-icon"></i>
              <span class="menu-title">Courses</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-course">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add-course">Add Course</a></li>
                <li class="nav-item"> <a class="nav-link" href="assign-course">Assign Course</a></li>
                <li class="nav-item"> <a class="nav-link" href="view-courses">View Course</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-staff" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-group menu-icon"></i>
              <span class="menu-title">Staff</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-staff">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add-staff">Add Staff</a></li>
                <li class="nav-item"> <a class="nav-link" href="view-staff">View Staff</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="statistics">
              <i class="typcn typcn-chart-bar menu-icon"></i>
              <span class="menu-title">Statistics</span>
              <!-- <i class="menu-arrow"></i> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="typcn typcn-user menu-icon"></i>
              <span class="menu-title">Profile</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
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