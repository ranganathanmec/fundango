<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>

    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <style>
     div#datatable_buttons_filter {
    display: none !important;
}
 tfoot {
    display: table-header-group;
}
tfoot select {
    width: 100% !important;
}
</style>
  
  
   <!-- page content -->
<div class="right_col" role="main">
          <!-- top tiles -->
	<div class="row tile_count">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Reports <small></small></h2>					
                    <ul class="nav navbar-right panel_toolbox">
					    <li>
							<div class="actions">
                                <a href="add_user.php" class="btn default yellow-stripe">
                                	<i class="fa fa-plus"></i>
                                	<span class="hidden-480" style="color:#2a3f54;">Add User</span>
                                </a>
							</div>
						</li>
					  
                    </ul>
                    <div class="clearfix"></div>
                </div>
				  
                <div class="x_content">     
                  	<table id="masterreport" class="table table-striped table-bordered">
   						<thead>
           					<th>School Name</th>
							<th>Class Name</th>
							<th>Section Name</th>
							<th>Term Name</th>
							<th>Subject Name</th>
							<th>Lesson Name</th>
							<th>Progress </th>
   						</thead>
    					<tfoot>
        					<tr>
           						<th>School Name</th>
            					<th>Class Name</th>
            					<th>Section Name</th>
            					<th>Term Name</th>
            					<th>Subject Name</th>
            					<th>Lesson Name</th>
           						<th>Progress </th>
        					</tr>
    					</tfoot>
    					<tbody>
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

$(document).ready(function(){

$('#masterreport').DataTable( {
  dom: 'Bfrtip',
        buttons: [
          'copy', 'csv','excel', 'pdf', 'print'
        ],

       "ajax":{
           "url":"ajax_master_report.php",
           "dataSrc":''
       },
       "columns":[
           {"data":"school_name"},
           {"data":"class_name"},
           {"data":"section_name"},
           {"data":"term_name"},
           {"data":"subject_name"},
           {"data":"lesson_name"},
           {"data":"progress_percentage"}
       ],

       initComplete: function () {
           this.api().columns().every( function () {
               var column = this;
               var select = $('<select><option value="">All</option></select>')
                   .appendTo( $(column.footer()).empty() )
                   .on( 'change', function () {
                       var val = $.fn.dataTable.util.escapeRegex(
                           $(this).val()
                       );

                       column
                           .search( val ? '^'+val+'$' : '', true, false )
                           .draw();
                   } );

               column.data().unique().sort().each( function ( d, j ) {
                   select.append( '<option value="'+d+'">'+d+'</option>' )
               } );
           } );
       }
   } );
});


   </script>


  