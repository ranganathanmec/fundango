<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>  
<style type="text/css">
.tab-content>.in {
    display: block !important;
}
</style>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
		<link rel="stylesheet" href="admin/assets/css/formValidation.min.css">
       
 <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-tagsinput.css">
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  
   <!-- page content --><?php
					
					// echo $session_id;
                    if(isset($_POST['send']))
                    {	


                    $subject_name=$_POST['subject_name'];
                    $subject_id=$_POST['subject_id'];
                    $status=$_POST['status'];
                     
                            $que="UPDATE `subjects` set `subject_name`='$subject_name',`status`='$status' where `subject_id`='$subject_id' ";
                            $query = mysqli_query($conn,$que);
                            	
                            if($query)
                            {                                
                                echo "<font color='green' style='margin-left:400px;'>Successfully Added</font>";
                       
                            }
                            else
                            {
                                echo "<font color='green'>Error While Adding Subject </font>";	
                            }
                       
					
					
                       
                    }

					?>
                    <?php if(isset($_GET['$subject_id']))
                    {
                        $subject_id=base64_decode($_GET['$subject_id']);
                        $q=mysqli_query($conn,"select subject_name,status FROM subjects WHERE subject_id='$subject_id'");
                        $row=mysqli_fetch_assoc($conn,$q);

                        
                        ?>
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subjects Management <small>Update Subjects </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li> -->
					  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <!--  <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
					
					
                  
				   <form class="form-horizontal form-label-left " novalidate name="add_ch_logs" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="add_ch_logs" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Update Info</span>  
					  <span style="color:red;float:right;">* indicating mandatory fields</span>
					  
					 
					 
					    <ul class="nav nav-tabs" style="display: none;">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    
  </ul> 

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">Subject name<span class="required" style="color:red;">*</span>
                        </label>
                        <?php  ?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="subject_name" class="form-control col-md-7 col-xs-12"  name="subject_name" value="<?php echo $row['subject_name']; ?>" >
						  
                            </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Status">Status<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                          <select id="status" class="form-control col-md-7 col-xs-12"  name="status" >
                          <?php if($row['status']=='1'){ ?>
                            <option value="<?php $row['status'];?>" selected >Active</option>
                            <option value="0">De Active</option>

                         <?php } else { ?>

                            <option value="<?php echo $row['status']; ?>" selected >De Active</option>
                            <option value="1">Active</option>
                             
                         <?php }?>
                         
                          
                          
                          </select>
						  
                        </div>
                    </div>
                      
                    <input type="text" name="subject_id" id="subject_id" value="<?php echo $subject_id; ?>" hidden>
					   <!-- <button type="button" class="btn btn-primary nextsetp" name="menu1"> </button> -->
					  
					
    </div>
    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <!-- <button type="button" class="btn btn-danger" onclick="javascript:location.href=''">Cancel</button> -->
                          <button id="send" type="submit" class="btn btn-success" name="send">Submit</button>
                        </div>
                      </div
    
	
	
  </div>
 
                    </form>
                  </div>
                </div>
              </div>

            
           
           
          </div>
          <!-- /top tiles -->

            </div>
        <!-- /page content -->
		

  
                      
            
      
 <?php include('footer.php'); ?>   
 


<script src="admin/assets/js/formValidation.min.js"></script>
<script src="admin/assets/js/form-validation/bootstrap.min.js"></script>
<script src="bootstrap-tagsinput.js"></script>

  
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   
    
    <!-- Initialize datetimepicker -->
	

 

<script>

       
    $('#myDatepicker').datetimepicker();
    
     $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    
      $('#myDatepicker2').on('change dp.change', function(e){
    $('#add_ch_logs').formValidation('revalidateField', 'date_duration');
})
    
      $(document).ready(function(){
          $('.nextsetp').on('click', function(){
             $('.tab-pane').removeClass('in'); 
          });

   $('#add_ch_logs').formValidation({
        excluded: [':disabled'],
        fields: {
            subject_name:{
                    validators: {
                        notEmpty: {
                            message: ' Please Enter School Name'
                        }
                    }
        },
        
        
         
        }
   }).on('err.field.fv', function(e, data) {
            // data.fv --> The FormValidation instance

            // Get the first invalid field
            var $invalidFields = data.fv.getInvalidFields().eq(0);

            // Get the tab that contains the first invalid field
            var $tabPane     = $invalidFields.parents('.tab-pane'),
                invalidTabId = $tabPane.attr('id');
            
            // If the tab is not active
            if (!$tabPane.hasClass('active')) {
                // Then activate it
                
                $tabPane.parents('.tab-content')
                        .find('.tab-pane')
                        .each(function(index, tab) {
                            console.log('tab',tab);
                            var tabId = $(tab).attr('id'),
                                $li   = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent();

                            if (tabId !== invalidTabId) {
                                // activate the tab pane
                                   $(tab).removeClass('active');
                                $(tab).removeClass('in');
                                 $(tab).addClass('fade');
                                $li.removeClass('active');
                            } else {
                                 $(tab).addClass('in');
                                //$(tab).show();
                                  $(tab).removeClass('fade');
                                $(tab).addClass('active');
                                
                                // and the associated <li> element
                                $li.addClass('active').trigger('click');
                                //$(tab).removeClass('in');
                               
                            }
                        });

                // Focus on the field
                $invalidFields.focus();
            }
        });
        });
$('#tags-input').tagsinput({
    confirmKeys: [13, 44],
    cancelConfirmKeysOnEmpty: false,
    tagClass: 'big'
});
   
</script>

   