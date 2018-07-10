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
                    <h2>Lesson Plan Managements <small>Add Lesson Plan </small></h2>
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


                    $class=$_POST['selclass'];
                    $subject=$_POST['subject'];
                    
                    $term=$_POST['term'];
                    $lesson_name=$_POST['lesson_name'];
                    $lesson_discription=$_POST['lesson_discription'];
                    $keywords=$_POST['keywords'];
                    $review_quest=$_POST['review_quest'];
                    
                    $_FILES['lesson']['dest_path']=preg_replace('/\s+/', '', $lesson_name);
                    $_FILES['assessmentfile']['dest_path']=preg_replace('/\s+/', '', $lesson_name).'_assess';
                    $flag=false;
                    
                   
                          
                    $name_array=array();
                    foreach($_FILES as $i)
                    {
                       
                        $ext=pathinfo($i['name'])['extension'];
                        $uq_id=$i['dest_path'].substr(uniqid(),-4).'.'.$ext;
                        $lesson_file="uploads/".$uq_id;
                        $audio_formats=array('mp3','aac','wav','m4a','wma','webm');
                        if(in_array($ext,$audio_formats) && move_uploaded_file($i['tmp_name'],$lesson_file))
                        {    
                            $flag=true;
                            $name_array[]=$uq_id;
                            
                           

                        }
                        else
                           break;                     
                    }


                    if($flag)
                        {
                            
                            $le_file_name=$name_array[0];
                            $ass_file_name=$name_array[1];
                        
                            $que="INSERT INTO `lessons`(`lesson_name`, `lesson_file`, `lesson_discription`, `assessment_file`, `review_questions`, `term_id`,`class_name`, `subject_id`, `keywords`, `created_date`, `status` ) VALUES ('$lesson_name','$le_file_name','$lesson_discription','$ass_file_name','$review_quest','$term','$class','$subject','$keywords',now(),'1')";
                            $query = mysqli_query($conn,$que);
                            $last_id=mysqli_insert_id($conn);	
                            if($query)
                            {
                               $qa= mysqli_query($conn,"insert into lessonmodificationlog (lession_id,class_id,subject_id) values ('$last_id','$class','$subject')");
                                $qx=mysqli_query($conn,"insert into class_subject (`class_id`,`subject_id`,`term_id`,`created_date`) values ('$class','$subject','$term',now())");
                                

                              
                                echo "<font color='green' style='margin-left:400px;'>Success</font>";
                       
                            }
                            else
                            {
                                echo "<font color='green'>Error</font>";	
                            }
                        }
                        else
                        {
                            echo "<font color='green' style='margin-left:400px;'>Error in Audio File or Not Valid Audio Fiile</font>";
                        }
                            
                    

              
 	
					}
					
					
					
					?>
                  
				   <form class="form-horizontal form-label-left " novalidate name="add_ch_logs" action="<?php echo $_SERVER['PHP_SELF'];  ?>" id="add_ch_logs" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Add Plan Info</span>  
					  <span style="color:red;margin-left:990px;">* indicating mandatory fields</span>
					  
					 
					 
					    <ul class="nav nav-tabs" style="display: none;">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    
  </ul> 

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">Class<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="selclass" class="form-control col-md-7 col-xs-12"  name="selclass" >
						  <option value="">Select Class</option>					 
						  <option value="1">1 Standard</option>
						  <option value="2">2 Standard</option>
						  <option value="3">3 Standard</option>
						  <option value="3">3 Standard</option>
						  <option value="4">4 Standard</option>
						  <option value="5">5 Standard</option>						  						 					 
						  </select>
                            </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Subject <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="subject" class="form-control col-md-7 col-xs-12"  name="subject" >
                        <?php $q=mysqli_query($conn,"SELECT subject_id,subject_name FROM `subjects` WHERE status=1 ORDER by subject_name");
                        if(!mysqli_num_rows($q)>0)
                        {
                            echo '<option value="" selected >No Subjects Found</option>';
                        }
                        else
                        {
                            ?>
                        
						  <option value="" selected >Select Subject</option>						
                          <?php 
                          while($row=mysqli_fetch_assoc($q))
                          {
                            echo '<option value="'.$row['subject_id'].'">'.$row['subject_name'].'</option>';
                          }
                          
                        }
                        ?>				  					 
						  </select>
						  
                       
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Term <span class="required" style="color:red;">*</span>
                        </label>
                        <?php $q=mysqli_query($conn,"select term_id,term_name from term WHERE status='1' ORDER by term_id,term_name ASC");
                                ?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <select id="subject" class="form-control col-md-7 col-xs-12"  name="term" >
                         <?php 
                         if(mysqli_num_rows($q)>0)
                         {
                            echo '<option value="">Select Term</option>';
                             while($row=mysqli_fetch_assoc($q))
                             {
                                echo '<option value="'.$row['term_id'].'">'.$row['term_name'].'</option>';

                             }
                            
                             
                         }
                         else
                            echo '<option value="">No Terms Found</option>';
                         
                         ?>
						  
						  
						  					  					 
						  </select>
						  
                       
                        </div>
                      </div>


                      
                      <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Lesson Name <span class="required" style="color:red;">*</span>
                        </label>
                        <div class='input-group  col-md-6 col-sm-6 col-xs-12' >
                            <input type='text' class="form-control"  id="group_size" name="lesson_name" placeholder="Lesson Name" />
                          
                        </div>
                    </div>
						 <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Lesson Discription <span class="required" style="color:red;">*</span>
                        </label>
                        <div class='input-group  col-md-6 col-sm-6 col-xs-12' >
                            <textarea  class="form-control"  id="group_size" name="lesson_discription" placeholder="Lesson Discription" cols="40" rows="5" ></textarea>
                          
                        </div>
                    </div>
                    <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Keywords <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="input-group  col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control"  id="tags-input" name="keywords" placeholder="Keywords" data-name="data-role"/>
                          
                        </div>
                    </div>
					
					   
					 
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topics">Review Questions <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type='text' class="form-control"  id="topics" name="review_quest" />
                        </div>
                      </div>
					  
					 		
					
					 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duration">Lesson File Upload<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type='file' class="form-control" name="lesson" id="lesson" accept="audio/mp3" />
                        </div>
                      </div>
					  
					  
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="concept">Assessment File <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="assessmentfile" class="form-control col-md-7 col-xs-12"  name="assessmentfile" placeholder="Concepts "accept="audio/mp3"  />
                        </div>
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
            selclass:{
                    validators: {
                        notEmpty: {
                            message: ' Please Select a Class'
                        }
                    }
        },
        subject:{
                    validators: {
                        notEmpty: {
                            message: ' Please Select a Class'
                        }
                    }
        },
        term:{
                    validators: {
                        notEmpty: {
                            message: ' Please Select a Term'
                        }
                    }
        },
        lesson_name:{
                    validators: {
                        notEmpty: {
                            message: 'Please Enter Lesson Name'
                        }
                    }
        },
        lesson_discription:{
                    validators: {
                        notEmpty: {
                            message: 'Please Enter Lesson Discription'
                        }
                    }
        },
        
        review_quest:{
                    validators: {
                        notEmpty: {
                            message: 'Please Select a Review Questions'
                        }
                    }
        },
        lesson:{
                    validators: {
                        notEmpty: {
                            message: 'Please Select Lesson Audio File'
                        }
                    }
        },
        
        assessmentfile:{
                    validators: {
                        notEmpty: {
                            message: 'Please Select Assessment Audio File'
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

   