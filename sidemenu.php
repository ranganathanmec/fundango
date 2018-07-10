
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class=""><img src="production/images/photo.jpg" width="230px" height="130px"></a>
            </div>

            <div class="clearfix"></div>

          

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               <!--  <h3>General</h3> -->
                <ul class="nav side-menu">
                <li><a href="dashboard.php"><i  class="fa fa-dashboard" aria-hidden="true"></i>Dashoard</a>
                </li>
                    
                  

                   <li><a><i  class="fa fa-users" aria-hidden="true"></i>Manage Users</a>
                    <ul class="nav child_menu">
                      <li><a href="list_users.php"><i class="fa fa-user"></i>List Users</a></li>
                      <li><a href="add_user.php"><i class="fa fa-user-plus"></i>Add User</a></li>
                    </ul>
                    </li>
                    
                    <li><a><i class="fa fa-university" aria-hidden="true"></i> Manage Schools</span></a>
                    <ul class="nav child_menu">
                      <li><a href="list_schools.php">List of Schools</a></li> 
                      <li><a href="add_schools.php">Add School</a></li> 
                    </ul>
                  </li> 
                  
                  <li><a><i class="fa fa-book" aria-hidden="true"></i> Manage Classes</span></a>
                    <ul class="nav child_menu">
                      <li><a href="list_classes.php">List of Classes</a></li> 
                      <li><a href="add_classes.php">Add Class</a></li> 
                    </ul>
                  </li> 
                  
                   <li><a><i class="fa fa-book" aria-hidden="true"></i> Manage Sections</span></a>
                      <ul class="nav child_menu">
                      <li><a href="list_sections.php">List of Sections</a></li> 
                        <li><a href="add_sections.php">Add Sections</a></li> 
                      </ul>
                    </li>
                    <li><a><i class="fa fa-book" aria-hidden="true"></i> Manage Subjects</span></a>
                    <ul class="nav child_menu">
                      <li><a href="list_subjects.php">List of Subjects</a></li>  
                      <li><a href="add_subjects.php">Add Subject</a></li>  
                    </ul>
                  </li>

                    
                    <li><a><i class="fa fa-book" aria-hidden="true"></i> Manage Terms</span></a>
                    <ul class="nav child_menu">
                      <li><a href="list_terms.php">List of Terms</a></li>  
                      <li><a href="add_terms.php">Add Terms</a></li>  
                    </ul>
                  </li>

                  </li>
                    <li><a><i class="fa fa-book" aria-hidden="true"></i> Manage Lessons</span></a>
                      <ul class="nav child_menu">
                          <li><a href="list_lessons.php">List Lesson</a></li> 
                          <li><a href="add_lessons.php">Add</a></li> 
                      </ul>
                    </li>
                    </li>
                    <li><a><i class="fa fa-chart-bar" aria-hidden="true"></i> Reports</span></a>
                      <ul class="nav child_menu">
                          <li><a href="#">Reports</a></li> 
                          <li><a href="#">Report</a></li> 
                      </ul>
                    </li>

                  

                 

                  


                  

                 
                  
                </ul>
              </div>
              <div class="menu_section">
                
                   </div>

            </div>
            <!-- /sidebar menu -->

           
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
<?php 
$se_que = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `adminlogin` WHERE admin_id='$session_id'"));
?>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="production/images/user.png" alt=""><?php echo $se_que['admin_name']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
				    <?php if($_SESSION['user_type']=='admin'){ ?>
                    <li><a href="edit_member.php?id=<?php echo base64_encode($_SESSION['admin_id']); ?>"> Profile</a></li>
                    
                    <?php } ?>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                    </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        
       
