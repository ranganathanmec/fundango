<?php  declare(strict_types=1);include('header.php'); ?>
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
  <?php
 
					
					// echo $session_id;
                    if(isset($_POST['send']))
                    {
                        $flag_stst=array();
                        $lesson_id=$_POST['lesson_id'];
                        $class=$_POST['selclass'];
                        $subject=$_POST['subject'];
                        $status=$_POST['status'];
                        $term=$_POST['term'];
                        $lesson_name=$_POST['lesson_name'];
                        $lesson_discription=$_POST['lesson_discription'];
                        $keywords=$_POST['keywords'];
                        $review_quest=$_POST['review_quest'];
                        $audio_formats=array('mp3','aac','wav','m4a','wma','webm');
                        
                        $l_flag='';
                        $a_flag='';
    

                        $_FILES['lesson']['dest_path']=preg_replace('/\s+/', '', $lesson_name);
                        $_FILES['assessmentfile']['dest_path']=preg_replace('/\s+/', '', $lesson_name).'_assess';
                        $row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT lesson_file as d_less,assessment_file as d_ass FROM lessons WHERE lesson_id='$lesson_id'"));
                        $d_less=$row['d_less'];
                        $d_ass=$row['d_ass'];

                        class access_files{
                            

                        public function move_audio_file($i)
                        {
                       
                            $ext=pathinfo($i['name'])['extension'];
                            $new_file_name=$i['dest_path'].substr(uniqid(),-4).'.'.$ext;
                            $path="uploads/".$new_file_name;
                            $audio_formats=array('mp3','aac','wav','m4a','wma','webm');
                            if(in_array($ext,$audio_formats) && move_uploaded_file($i['tmp_name'],$path))
                            {                                
                                //$name_array[]=$new_file_name;
                                
                                return $new_file_name;
                                
                            }
                            else
                            return '' ;                     
                        }


                    }


                   
                   

                    //print_r($_FILES);
                   
                        //var_dump($_POST);
                    if($_FILES['lesson']['name']!='' && $_FILES['assessmentfile']['name']!='' )
                    {
                        
                        $obx=new access_files();                    
                         $l_flag=$obx->move_audio_file($_FILES['lesson']);
                         $a_flag=$obx->move_audio_file($_FILES['assessmentfile']);
                         if($l_flag!='' && $a_flag!='')
                         {
                             unlink("uploads/".$d_less);
                             unlink("uploads/".$d_ass);
                             $q="UPDATE `lessons` SET `lesson_file`='$l_flag',`assessment_file`='$a_flag',`lesson_name`='$lesson_name',`lesson_discription`='$lesson_discription',`review_questions`='$review_quest', `term_id`='$term',`class_name`='$class',`subject_id`='$subject', `keywords`='$keywords',`status`='$status' WHERE `lesson_id`='$lesson_id'";
                            if(mysqli_query($conn,$q))
                             {
                                $qa= mysqli_query($conn,"UPDATE lessonmodificationlog SET modified_date=now() where lession_id='$lesson_id'");
                                echo "<script>alert('Update Successfull');history.go(-2);</script>";
                                exit(1);

                             }
                             else
                             echo "<script>alert('Error While Updating Datas');history.go(-1);</script>";

                            


                         }
                         else{
                            echo "<script>alert('Error While Uploading Audio');history.go(-1);</script>";

                         }

                       

                    }

                    else if($_FILES['lesson']['name']!='')
                    {
                        
                        $obx=new access_files();                    
                         $l_flag=$obx->move_audio_file($_FILES['lesson']);
                         
                         if($l_flag!='')
                         {
                             unlink("uploads/".$d_less);
                             $q="UPDATE `lessons` SET `lesson_file`='$l_flag',`lesson_name`='$lesson_name',`lesson_discription`='$lesson_discription',`review_questions`='$review_quest', `term_id`='$term',`class_name`='$class',`subject_id`='$subject', `keywords`='$keywords',`status`='$status' WHERE `lesson_id`='$lesson_id'";
                            if(mysqli_query($conn,$q))
                             {
                                $qa= mysqli_query($conn,"UPDATE lessonmodificationlog SET modified_date=now() where lession_id='$lesson_id'");
                                echo "<script>alert('Update Successfull');history.go(-2);</script>";
                                exit(1);

                             }
                             else
                             echo "<script>alert('Error While Updating Datas');history.go(-1);</script>";

                            


                         }
                         else{
                            echo "<script>alert('Error While Uploading Audio');history.go(-1);</script>";

                         }




                    }

                    else if($_FILES['assessmentfile']['name']!='')
                    {
                        $obx=new access_files();                    
                        $a_flag=$obx->move_audio_file($_FILES['assessmentfile']);
                         
                         if($a_flag!='')
                         {
                             unlink("uploads/".$d_ass);
                             $q="UPDATE `lessons` SET `assessment_file`='$a_flag',`lesson_name`='$lesson_name',`lesson_discription`='$lesson_discription',`review_questions`='$review_quest', `term_id`='$term',`class_name`='$class',`subject_id`='$subject', `keywords`='$keywords',`status`='$status' WHERE `lesson_id`='$lesson_id'";
                            if(mysqli_query($conn,$q))
                             {
                                $qa= mysqli_query($conn,"UPDATE lessonmodificationlog SET modified_date=now() where lession_id='$lesson_id'");
                                echo "<script>alert('Update Successfull');history.go(-2);</script>";
                                exit(1);

                             }
                             else
                             echo "<script>alert('Error While Updating Datas');history.go(-1);</script>";

                            


                         }
                         else{
                            echo "<script>alert('Error While Uploading Audio');history.go(-1);</script>";

                         }




                    }
                    else
                    {
                        $q="UPDATE `lessons` SET `lesson_name`='$lesson_name',`lesson_discription`='$lesson_discription',`review_questions`='$review_quest', `term_id`='$term',`class_name`='$class',`subject_id`='$subject', `keywords`='$keywords',`status`='$status' WHERE `lesson_id`='$lesson_id'";
                            if(mysqli_query($conn,$q))
                             {
                                $qa= mysqli_query($conn,"UPDATE lessonmodificationlog SET modified_date=now() where lession_id='$lesson_id'");
                                echo "<script>alert('Update Successfull');history.go(-2);</script>";
                                exit(1);

                             }
                             else
                             echo "<script>alert('Error While Updating Datas');history.go(-1);</script>";

                    }
                    
                   
                
                    
					
                }	
					?>


                    <?php if(isset($_GET['lesson_id']))

                    {
                        $lesson_id=base64_decode($_GET['lesson_id']);
                        $q=mysqli_query($conn,"SELECT * FROM lessons WHERE lesson_id='$lesson_id'");
                        
                        $row=mysqli_fetch_assoc($q);

                      //  var_dump($row);
                        $lesson_name=$row['lesson_name'];
                        $lesson_file=$row['lesson_file'];
                        $lesson_discription=$row['lesson_discription'];
                        $assessment_file=$row['assessment_file'];
                        $review_questions=$row['review_questions'];
                        $term_id=$row['term_id'];
                        $status=$row['status'];



                 ?>
   <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lesson Plan Managements <small>Update Lesson  </small></h2>
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
					
					
                  
				   <form class="form-horizontal form-label-left " novalidate name="add_ch_logs" action="<?php echo $_SERVER['PHP_SELF'];  ?>" id="add_ch_logs" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Update Lesson Info</span>  
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
                          <?php 
                          for($i=1;$i<6;$i++)
                          {
                              if($i==$row['class_name'])
                              {
                                  echo '<option value="'.$i.'" selected>'.$i.' Standard'.'</option>';
                              }
                              else
                              echo '<option value="'.$i.'">'.$i.' Standard'.'</option>';

                          }
                          
                          ?>					  						 					 
						  </select>
                            </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Subject <span class="required" style="color:red;">*</span>
                        </label>
                        <?php $q=mysqli_query($conn,"SELECT subject_id,subject_name FROM `subjects`");?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <select id="subject" class="form-control col-md-7 col-xs-12"  name="subject" >
                          <?php while($row1=mysqli_fetch_assoc($q))
                          {
                              if($row1['subject_id']==$row['subject_id'])
                              {
                                  echo '<option value="'.$row1['subject_id'].'" selected>'.$row1['subject_name'].'</option>';
                              }
                              else
                              echo '<option value="'.$row1['subject_id'].'">'.$row1['subject_name'].'</option>';

                          }
                          
                          ?>
						  					  					 
						  </select>
						  
                       
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Term <span class="required" style="color:red;">*</span>
                        </label>
                        <?php $q=mysqli_query($conn,"SELECT term_id,term_name FROM term");?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <select id="subject" class="form-control col-md-7 col-xs-12"  name="term" >
                         <?php while($row1=mysqli_fetch_assoc($q))
                          {
                              if($row1['term_id']==$row['term_id'])
                              {
                                  echo '<option value="'.$row1['term_id'].'" selected>'.$row1['term_name'].'</option>';
                              }
                              else
                              echo '<option value="'.$row1['term_id'].'">'.$row1['term_name'].'</option>';

                          }
                          
                          ?>
						  
						  					  					 
						  </select>
						  
                       
                        </div>
                      </div>


                      
                      <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Lesson Name <span class="required" style="color:red;">*</span>
                        </label>
                        <div class='input-group  col-md-6 col-sm-6 col-xs-12' >
                            <input type='text' class="form-control"  id="group_size" name="lesson_name" placeholder="Lesson Name" value="<?php echo $row['lesson_name'] ?>" />
                          
                        </div>
                    </div>
						 <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Lesson Discription <span class="required" style="color:red;">*</span>
                        </label>
                        <div class='input-group  col-md-6 col-sm-6 col-xs-12' >
                            <textarea  class="form-control"  id="group_size" name="lesson_discription" placeholder="Lesson Discription" cols="40" rows="5" ><?php echo $row['lesson_discription'];?></textarea>
                          
                        </div>
                    </div>
                    <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Keywords <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="input-group  col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control"  id="tags-input" name="keywords" placeholder="Keywords" data-name="data-role" value="<?php echo $row['keywords']; ?>"/>
                          
                        </div>
                    </div>
					
					   
					 
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topics">Review Questions <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type='text' class="form-control"  id="review_quest" name="review_quest" value="<?php echo $row['review_questions']; ?>"/>
                        </div>
                      </div>
					  
					 		
					
					 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duration">Lesson File Upload<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type='file' class="form-control" name="lesson" id="lesson" accept="audio/mp3"/>
                        </div>
                        <a href="<?php echo "http://localhost/fundango/uploads/".$row['lesson_file']; ?>" target="_blank"><i class="fa fa-play"></i></a>
                      </div>
                     
					  
					  
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="concept">Assessmen File <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="assessmentfile" class="form-control col-md-7 col-xs-12"  name="assessmentfile" accept="audio/mp3"/>
                        </div>

                       <a href="<?php echo "http://localhost/fundango/uploads/".$row['assessment_file']; ?>" target="_blank"> <i class="fa fa-play"></i></a>
                      </div>
					   <!-- <button type="button" class="btn btn-primary nextsetp" name="menu1"> </button> -->
					  <input type="text" id="lesson_id" name="lesson_id" value="<?php echo $lesson_id; ?>" hidden />

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Status">Status<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                          <select id="status" class="form-control col-md-7 col-xs-12"  name="status" >
                          <?php if($status=='1'){ ?>
                            <option value="<?php$sc_status;?>" selected >Active</option>
                            <option value="0">De Active</option>

                         <?php } else { ?>

                            <option value="<?php echo $status; ?>" selected >De Active </option>
                            <option value="1">Active</option>
                             
                         <?php }?>
                         
                          
                          
                          </select>
						  
                        </div>
                    </div>
					
    </div>
    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <!-- <button type="button" class="btn btn-danger" onclick="javascript:location.href=''">Cancel</button> -->
                          <button id="send" type="submit" class="btn btn-success" name="send">Update</button>
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
		

  
                      
            
      
 <?php include('footer.php');} ?>   
 


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
        keywords:{
                    validators: {
                        notEmpty: {
                            message: 'Please Enter Some Keywords'
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

   