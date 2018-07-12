<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>

    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <style>
     div#datatable-buttons_filter {
    display: none !important;
}
 tfoot {
    display: table-header-group;
}
</style>
  
  
   <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Managements <small>List of Users </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
					 
					  <li> <div class="actions">
                                <a href="add_user.php" class="btn default yellow-stripe">
                                <i class="fa fa-plus"></i>
                                <span class="hidden-480" style="color:#2a3f54;">
                                Add User</span>
                                </a>
								</div></li>
					  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				  
                  <div class="x_content">
				  
                  
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
						
                                                 
                          <th>User Name</th>                          
                          <th>School Name</th>  
                          <th>Class Name</th>                        
                          <th>Section Name</th>    
                          <th>Date Created</th>   
                          <th>Status</th>  
                          <th>Action</th>
                        
                        </tr>
                      </thead>

                         <tfoot>
                          <tr>
                        
                          <!--                       
                          <th class="select-filter">Class</th>                          
                          <th></th>                          
                          <th class="select-filter" >Subject</th>                                                                
                          <th class="select-filter">Topic</th> 
                          <th></th>                           
                          <th></th>
                        -->
                        </tr> 

                      </tfoot>
                      <tbody>
             <?php 
             if(isset($_GET['true']))
                  $que = mysqli_query($conn,"SELECT login.*,school.school_name,class.class_name,section.section_name FROM `login` INNER JOIN  school on school.school_id=login.school_id INNER JOIN class ON class.class_id=login.class_id INNER JOIN section ON section.section_id=login.section_id  WHERE login.status=1 order by login.user_id,school_name,section_name ASC");
             else if(isset($_GET['false'])) 
                  $que = mysqli_query($conn,"SELECT login.*,school.school_name,class.class_name,section.section_name FROM `login` INNER JOIN  school on school.school_id=login.school_id INNER JOIN class ON class.class_id=login.class_id INNER JOIN section ON section.section_id=login.section_id  WHERE login.status=0 order by login.user_id,school_name,section_name ASC");
             else
					        $que = mysqli_query($conn,"SELECT login.*,school.school_name,class.class_name,section.section_name FROM `login` INNER JOIN  school on school.school_id=login.school_id INNER JOIN class ON class.class_id=login.class_id INNER JOIN section ON section.section_id=login.section_id order by school_name,section_name ASC");
			
					  
					  while($row_lst=mysqli_fetch_array($que)){ ?>
					   <tr>
					   <?php $user_id=base64_encode($row_lst['user_id']);?>
              <td><?php echo $row_lst['user_name'] ;?></td>    
              <td><?php echo $row_lst['school_name'] ;?></td>    
              <td><?php echo $row_lst['class_name'].' Standard' ;?></td>    
              <td><?php echo $row_lst['section_name'] ;?></td>    
              <td><?php echo $row_lst['created_date'] ;?></td>    
              <td><?php 
              if($row_lst['status']==1) 
                echo "<font color:'red'>Active</font>";
              else 
              echo "Inactive";
              
              ?></td>						  
							
							
					   <td>		  
						
						<a href="delete_action.php?user_id=<?php echo $user_id; ?>" onclick="return confirm('Are you sure you want to delete this user?');" class="delete" title="Delete" ><i class="fa fa-trash-o"></i></a> |  
						
						
						
						<a href="update_user.php?user_id=<?php echo $user_id; ?>"><i class="fa fa-edit" title="Edit"></i></a>
						
						
						
						</td>
						   
					  
					 
					   
												  
                          
                         
                        </tr>
					  <?php  }	  
					  
					  ?>
                       
                       
                        
                      </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>

            
           
           
          </div>
          <!-- /top tiles -->

            </div>
        <!-- /page content -->
		

  
                      

      
 <?php include('footer.php'); ?>   
  
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

   <script type="text/javascript">
   $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('.select-filter').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#datatable-buttons').DataTable();
      
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
   </script>


  