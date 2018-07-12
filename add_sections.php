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
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sections Management <small>Add Section </small></h2>
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
					
					<?php
					
					// echo $session_id;
                    if(isset($_POST['send']))
                    {	
                        $sec_names=array();
                        $no_of_sections=$_POST['no_of_sec'];
                        for($i=1;$i<=$no_of_sections;$i++)
                        {
                            if($_POST['no_of_sec'.$i])
                            {

                             $sec_names[]=$_POST['no_of_sec'.$i];
                                
                            }else
                            {
                               
                                echo '<script>alert("Please Enter Valid Section Names");history.go(-1)</script>';
                                exit(0);
                            }
                            

                           
                        }
                       
                        
                    


                    $class_id=$_POST['class_id'];

                    if(!mysqli_num_rows(mysqli_query($conn,"select * from section where class_id='$class_id'"))>0)
                        {
                    
                          for($i=0;$i<count($sec_names);$i++)      
                          {
                              $sec_name=$sec_names[$i];
                          $que="INSERT INTO `section`(`class_id`, `section_name`,`no_of_sections`,`created_date`,`status`) VALUES ('$class_id','$sec_name','$no_of_sections',now(),'1')";
                            $query = mysqli_query($conn,$que);
                          }
                            	
                            if($query)
                            {                                
                                echo "<font color='green' style='margin-left:400px;'>Successfully Added</font>";
                       
                            }
                            else
                            {
                                echo "<font color='green'>Error</font>".mysqli_error($conn);	
                            }
                        
                        }  else
                        echo "<font color='red' style='margin-left:400px;'>Section Already Set For this Class</font>";

					
					
                       
                    }

					?>
                  
				   <form class="form-horizontal form-label-left " novalidate name="add_ch_logs" action="<?php echo $_SERVER['PHP_SELF'] ?>" id="add_ch_logs" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Add Section Info</span>  
					  <span style="color:red;float:right;">* indicating mandatory fields</span>
					  
					 
					 
					    <ul class="nav nav-tabs" style="display: none;">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    
  </ul> 

  <div class="tab-content">

  <?php 
  $res_school=mysqli_query($conn,"SELECT `school_id`, `school_name` FROM `school` WHERE `status`=1 ");

  ?>
    <div id="home" class="tab-pane fade in active">
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">School name<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="school_id" class="form-control col-md-7 col-xs-12"  name="school_id" >
                          <option value="">select school name</option>
                          <?php 
                          while($row_school=mysqli_fetch_assoc($res_school))
                          {
                         
                          ?>
                         <option value=" <?php echo $row_school['school_id'] ?>"><?php echo $row_school['school_name'] ?></option>


                          <?php }  ?>
                          </select>
						  
                            </div>
                      </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">Class name<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="class_id" class="form-control col-md-7 col-xs-12"  name="class_id" disabled >
                          <option value="">select class name</option>
                          
                          </select>
						  
                            </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">No of  Section <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <input type="number" id="no_of_sec"  class="form-control col-md-7 col-xs-12"   name="no_of_sec" placeholder="Enter No of Section" min=1 max=10  disabled>
						  
						  
                       
                        </div>
                      </div>
                      

                      <div id="section_place">

                     
                      
                      
                      </div>
                      
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
            school_id:{
                    validators: {
                        notEmpty: {
                            message: ' Please Select School Name'
                        }
                    }
        },
       class_id:{
                    validators: {
                        notEmpty: {
                            message: ' Please Select Class Name'
                        }
                    }
        },
        no_of_sec:{
                    validators: {
                        notEmpty: {
                            message: ' Please Enter Number of Section'
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
   
 $(document).ready(function(){
    $('#school_id').on('change',function(){
         var f_sch_id=$(this).val();
         if(f_sch_id)
         {
            $('#class_id').attr('disabled',false);
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'f_sch_id='+f_sch_id,
                success:function(data){
                   
                        $('#class_id').html(data);
                    

                }
            })

         }
         else
            $('#class_id').attr('disabled',true);

    });


    $('#class_id').on('change',function(){
        var class_id=$(this).val();
        if(class_id)
        {
            $('#no_of_sec').attr('disabled',false);
            $('#no_of_sec').val('');

        }


    });

    $('#no_of_sec').on('keyup',function(){
        var items=$(this).val();
        $('#section_place').empty();
        if(items<15)
        {

            for(var i=1;i<=items;i++)
            {
        $('#section_place').append('<div class="item form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Section Name:'+i+' <span class="required" style="color:red;">*</span></label><div class="col-md-6 col-sm-6 col-xs-12"><input type="text" id="no_of_sec'+i+'"  class="form-control col-md-7 col-xs-12"   name="no_of_sec'+i+'" pattern="[A-Z]{1}" required /></div></div>');
       
            }

        }
    


    });
    
   
    

    
 })
</script>

   