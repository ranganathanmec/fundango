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
                    <h2>Lesson Plan Managements <small>List of Lesson Plan</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
					 
					  <li> <div class="actions">
                                <a href="add_lessons.php" class="btn default yellow-stripe">
                                <i class="fa fa-plus"></i>
                                <span class="hidden-480" style="color:#2a3f54;">
                                Add Lesson Plan</span>
                                </a>
								</div></li>
					 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				  
                  <div class="x_content">
				  
                  
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
						
                                                 
                          <th>Class</th>                          
                          <th>Subject</th>  
                          <th>Term</th>                        
                          <th>Lesson Name</th>                                                                
                          <th>Discription</th> 
						  <th>Status</th> 						  
                          <th>Action</th>
                        
                        </tr>
                      </thead>

                         <tfoot>
                          <tr>
                        
                                                 
                         
                        
                        </tr> 
                      </tfoot>
                      <tbody>
					   <?php 
					  
					  $que = mysqli_query($conn,"select lessons.*,subjects.subject_name,term.term_name from lessons INNER JOIN subjects ON lessons.subject_id=subjects.subject_id INNER JOIN term on lessons.term_id=term.term_id ORDER BY class_name ASC");
					  
					  
					  while($row=mysqli_fetch_array($que)){ ?>
					   <tr>
					   <?php $lesson_id=base64_encode($row['lesson_id']);?>
              <td><?php echo $row['class_name'] .' Standard' ;?></td>    
              <td><?php echo $row['subject_name'];?></td>						  
							<td><?php echo ($row['term_name']); ?></td>						  
							<td><?php echo $row['lesson_name']; ?></td>						  
							<td><?php echo $row['lesson_discription']; ?></td>						  
              <td><?php if($row['status']==1)
              {
                echo "Active";
              }else
              echo "In Active";?></td>						  
												  
							
					   <td>		  
						
						<a href="delete_action.php?lesson_id=<?php echo $lesson_id; ?>" onclick="return confirm('Are you sure you want to delete this Lesson?');" class="delete" title="Delete" ><i class="fa fa-trash-o"></i></a> |  
						
					
						
						<a href="update_lessons.php?lesson_id=<?php echo $lesson_id; ?>"><i class="fa fa-edit" title="Edit"></i></a>
						
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