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
  
   <!-- page content -->

<?php
					
					// echo $session_id;
                    if(isset($_POST['send']))
                    {	


                        $school_name=$_POST['school_name'];
                        $no_of_classes=$_POST['no_of_classes'];  
                        $school_type=$_POST['sch_type'];
                        $school_address=$_POST['sch_address'];
                        $school_city=$_POST['sch_city'];
                        $school_contact_no=$_POST['sch_contact_no'];
                        $school_contact_person=$_POST['sch_contact_person'];
                        $school_email=$_POST['sch_email'];
                        $school_state=$_POST['sch_state'];
                        $status=$_POST['status'] ;
                        $sc_id=$_POST['idx'] ;
                   

                    
                   

                    if(intval($no_of_classes)>=1 && intval($no_of_classes)<=12)   
                        {


                    

                    
                        
                            $que="UPDATE `school` SET `school_name`='$school_name', `no_of_class`='$no_of_classes',`sch_type`='$school_type',`sch_address`='$school_address',`sch_city`='$school_city',`sch_contact_no`='$school_contact_no',`sch_contact_person`='$school_contact_person',`sch_state`='$school_state',`sch_email`='$school_email',`modified_date`=now(),`status`='$status' where school_id='$sc_id' ";
                            $query = mysqli_query($conn,$que);
                            	
                            if($query)
                            {   
                                echo '<script>window.location.href="list_schools.php";alert("School Updated");</script>' ;
                                echo "<font color='green' style='margin-left:400px;'>Successfully Added</font>";
                     
                            }
                            else
                            {
                                echo "<font color='green'>Error</font>".mysqli_error($conn);	
                            }
                       
					
					
                        }
                        else
                        echo "<font color='green'>Enter Valid Class</font>";
                        
                    }

					?>
   <?php
   if(isset($_GET['school_id']))
   {
    $sch_id=base64_decode($_GET['school_id']);
    $qx=mysqli_query($conn,"select * from school where school_id='$sch_id'");
    $row=mysqli_fetch_array($qx);
    $sc_name=$row['school_name'];
    $sc_no_class=$row['no_of_class'];
    $sc_status=$row['status'];
    
  
   
   
   
   ?>
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Schools Management <small>Add Schools </small></h2>
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

                    
                      <span class="section">Add Plan Info</span>  
					  <span style="color:red;float:right;">* indicating mandatory fields</span>
					  
					 
					 
					    <ul class="nav nav-tabs" style="display: none;">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    
  </ul> 

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">School name<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="school_name" class="form-control col-md-7 col-xs-12"  name="school_name" value="<?php echo $sc_name; ?>" required >
						  
                            </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">No of Classes <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <input type="number" id="no_of_classes" value="<?php echo $sc_no_class ?>" class="form-control col-md-7 col-xs-12"  name="no_of_classes" min="1" max="12" required >
						  
						  
                       
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">School Type <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <select id="sch_type" class="form-control col-md-7 col-xs-12"  name="sch_type" required>
                         <?php
                         $sch_type=$row['sch_type'];
                         $sch_names=array(1=>"Goverment School",2=>"Corporation School",3=>"Goverment Aided School");
                         for($i=1;$i<=3;$i++)
                         {
                             if($i==$sch_type)
                                    echo '<option value="'.$i.'"selected>'.$sch_names[$i].'</option>';
                             else
                                    echo '<option value="'.$i.'">'.$sch_names[$i].'</option>';


                         }
                         
                         ?>
                                                 
                         </select>
						  
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Address<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <textarea id="sch_address" class="form-control col-md-7 col-xs-12" name="sch_address" cols="30" rows="5" required><?php echo $row['sch_address']; ?></textarea>
                         
						  
						  
                       
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">City <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" id="sch_city" class="form-control col-md-7 col-xs-12"  name="sch_city" pattern="[A-Za-z]" value="<?php echo $row['sch_city']; ?>" title="City name should contain letters only" required>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label" for="subject">State <span class="required" style="color:red;">*</span>
                                    </label>
                            
                            </div>
                            <div class="col-md-5">
                                <input type="text" id="sch_state" class="form-control col-md-7 col-xs-12"  name="sch_state" pattern="[A-Za-z]" title="State name should contain letters only" value="<?php echo $row['sch_state']; ?>" required>
                            
                            </div>

                        </div>
						
                        </div>
                      </div>




                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Contact No <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                        <div class="col-md-5">
                            <input type="text" id="sch_contact_no" class="form-control col-md-7 col-xs-12"  name="sch_contact_no" pattern="[0-9]" value="<?php echo $row['sch_contact_no'];?>" title="Please enter valid mobile number" required>
                        
                        </div>
                        <div class="col-md-2">
                            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="subject">Email<span class="required" style="color:red;">*</span>
                        
                        </div>
                        <div class="col-md-5">
                            <input type="text" id="sch_email" class="form-control col-md-7 col-xs-12"  name="sch_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter valid Email ID" value="<?php echo $row['sch_email'] ?>" required>


                        </div>
                        
                        
                        </div>

						
						 
						 
                         </div>
                      </div>
                          
                        

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Contact Person<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <input type="text" id="sch_contact_person" class="form-control col-md-7 col-xs-12"  name="sch_contact_person" pattern="[A-Za-z]" title="City name should contain letters only" value="<?php echo $row['sch_contact_person'];?>" required>
						  
						 
                        </div>
                      </div>





                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Status">Status<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                          <select id="status" class="form-control col-md-7 col-xs-12"  name="status" >
                          <?php if($sc_status=='1'){ ?>
                            <option value="<?php$sc_status;?>" selected >Active</option>
                            <option value="0">De Active</option>

                         <?php } else { ?>

                            <option value="<?php echo $sc_status; ?>" selected >De Active </option>
                            <option value="1">Active</option>
                             
                         <?php }?>
                         
                          </select>
						  
                        </div>
                    </div>


                    <input type="text" id="idx" name="idx" value="<?php echo $sch_id; ?>" hidden >
                      
					   <!-- <button type="button" class="btn btn-primary nextsetp" name="menu1"> </button> -->
					  
					
    </div>
    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <!-- <button type="button" class="btn btn-danger" onclick="javascript:location.href=''">Cancel</button> -->
                          <button id="send" type="submit" class="btn btn-success" name="send">Submit</button>
                        </div>
                      </div>
    
	
	 
	
	 
	 
	
    
  </div>
  
						


					  
                    
                    </form>
                  </div>
                </div>
              </div>

            
           
           
          </div>
          <!-- /top tiles -->

            </div>
        <!-- /page content -->
		

  
                      
            
      
 <?php include('footer.php'); }?>   
 


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
            school_name:{
                    validators: {
                        notEmpty: {
                            message: ' Please Enter School Name'
                        }
                    }
        },
        no_of_classes:{
                    validators: {
                        notEmpty: {
                            message: ' Please Enter No.of.classes'
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

   