
<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>
<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Schools</span>
              <div class="count"><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(school_name)as total FROM school"))['total'];?></div>
              <p class="count_bottom"><a href="list_schools.php?true=all"><i class="green">Active Schools:</i> <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(school_name)as active FROM school WHERE status=1"))['active'] ;?></a></p>
              <p class="count_bottom"><a href="list_schools.php?false=all"><i class="red">In-Active Schools:</i> <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(school_name)as inactive FROM school WHERE status=0"))['inactive'] ;?></a></p>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Total Users</span>
              <div class="count"><?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(user_id) as total FROM login"))['total'];?></div>
              <p class="count_bottom"><a href="list_users.php?true=all"><i class="green">Active Users:</i> <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(user_id) as active FROM login where status=1"))['active'] ;?></a></p>
              <p class="count_bottom"><a href="list_users.php?false=all"><i class="red">In-Active Users:</i> <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(user_id) as inactive FROM login where status=0"))['inactive'] ;?></a></p>
            </div>

<!--
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>

            -->

          </div>
          <!-- /top tiles -->

        </div>

 
     
    <?php include('footer.php'); ?>   
