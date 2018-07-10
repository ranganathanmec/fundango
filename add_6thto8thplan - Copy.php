<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
		<link rel="stylesheet" href="admin/assets/css/formValidation.min.css">
   
 <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lesson Plan Managements <small>Add Plan for 6th to 8th</small></h2>
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
					if(isset($_POST['send'])){
						
						if($stafftype=='Principal'){
	$stff_id = $_POST['selstaff'];
}else{
	$stff_id = $session_id;
}
	
						$ldate=$_POST['log_date'];											
						$imdate = explode(' ',$ldate);
						$datee = str_replace('/', '-', $imdate[0]);						
						$imdate1 = explode('-',$datee);						
						$exdate =  $imdate1[2].'-'.$imdate1[1].'-'.$imdate1[0];
						
						$academic=$_POST['academic'];
						$adminis=$_POST['adminis'];
						$admission=$_POST['admission'];
						$staff=$_POST['staff'];
						$student=$_POST['student'];
						$program=$_POST['program'];
						$exam=$_POST['exam'];		
						$other=$_POST['other_detail'];		
						

 	$query = mysqli_query($conn,"INSERT INTO `ch_logs` (`campus_head`,`academics`,`administration`,`admission`,`staff`,`students`,`program`,`exam`,`others`,`add_date`,`status`) VALUES ('$stff_id','$academic','$adminis','$admission','$staff','$student','$program','$exam','$other','$exdate','1')")or die(mysqli_error());
		
if($query){

echo "<font color='green' style='margin-left:400px;'>Success</font>";

					}else{
					echo "<font color='green'>Error</font>";	
					}
					}
					
					
					
					?>
                  
				   <form class="form-horizontal form-label-left" novalidate name="add_ch_logs" action="add_chlogs.php" id="add_ch_logs" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Add Plan Info</span>
					  
					 
					 
					   <!-- <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul> -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">Class<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="selclass" class="form-control col-md-7 col-xs-12"  name="selclass" required>
						  <option value="">Select Class</option>						
						  <option value="kg">KG</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>
						  <option value="8">8</option>
						  <option value="9">9</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>						 
						  </select>
                        </div>
                      </div>
						
						 <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Group size <span class="required">*</span>
                        </label>
                        <div class='input-group  col-md-6 col-sm-6 col-xs-12' >
                            <input type='text' class="form-control" required="required" id="group_size" name="group_size" />
                          
                        </div>
                    </div>
					
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Subject <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <select id="subject" class="form-control col-md-7 col-xs-12"  name="subject" required>
						  <option value="">Select Subject</option>						
						  <option value="english">English</option>
						  <option value="l2-tamil">L2-Tamil</option>
						  <option value="l2-hindi">L2-Hindi</option>
						  <option value="l2-french">L2-French</option>
						  <option value="l3-tamil">L3-Tamil</option>
						  <option value="l3-hindi">L3-Hindi</option>
						  <option value="l3-french">L3-French</option>
						  <option value="maths">Maths</option>
						  <option value="science">Science</option>
						  <option value="socialscience">Social Science</option>						  					 
						  </select>
						  
                       
                        </div>
                      </div>
					 
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topics">Lesson No & Topic 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type='text' class="form-control" required="required" id="topics" name="topics" />
                        </div>
                      </div>
					  
					 <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_duration"> Dates & Duration <span class="required">*</span>
                        </label>
                        <div class='input-group date col-md-6 col-sm-6 col-xs-12' id='myDatepicker2' >
                            <input type='text' class="form-control" required="required" id="date_duration" name="date_duration" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
					  
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="concept">Concepts <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="concept" class="form-control col-md-7 col-xs-12"  name="concept" placeholder="Concepts" required="required" ></textarea>
                        </div>
                      </div>
					  
					  <a data-toggle="tab" href="#menu1" class="btn btn-primary" style="margin-left:995px;">Next >> </a>
					
    </div>
    <div id="menu1" class="tab-pane fade">
	
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_outcome">Learning Outcome <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_outcome" class="form-control col-md-7 col-xs-12"  name="learning_outcome" placeholder="Learning Outcome" required="required" ></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="assessment_evidence">Assessment/Evidence 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="assessment_evidence" class="form-control col-md-7 col-xs-12"  name="assessment_evidence" placeholder="Assessment/Evidence" ></textarea>
                        </div>
                    </div>
					
					<a data-toggle="tab" href="#home" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu2" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
					
    </div>
    <div id="menu2" class="tab-pane fade">
	
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paradigm">Paradigm 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="paradigm" class="form-control col-md-7 col-xs-12"  name="paradigm" placeholder="Paradigm" ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_style">Teaching Style 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_style" class="form-control col-md-7 col-xs-12"  name="teaching_style" placeholder="Teaching Style" ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_style">Learning Style <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_style" class="form-control col-md-7 col-xs-12"  name="learning_style" placeholder="Learning Style" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_strategey">Teaching Strategy <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_strategey" class="form-control col-md-7 col-xs-12"  name="teaching_strategey" placeholder="Teaching Strategy" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_techniques">Learning Techniques
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_techniques" class="form-control col-md-7 col-xs-12"  name="learning_techniques" placeholder="Learning Techniques" ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_techniques">Teaching Techniques 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_techniques" class="form-control col-md-7 col-xs-12"  name="teaching_techniques" placeholder="Teaching Techniques" ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_tools">Learning Tools <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_tools" class="form-control col-md-7 col-xs-12"  name="learning_tools" placeholder="Learning Tools" required></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_skills">Teaching Skills <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_skills" class="form-control col-md-7 col-xs-12"  name="teaching_skills" placeholder="Teaching Skills" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="specific_skills">Subject-Specific Skills <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="specific_skills" class="form-control col-md-7 col-xs-12"  name="specific_skills" placeholder="Subject-Specific Skills" required ></textarea>
                        </div>
                    </div>
					
					
					
					<a data-toggle="tab" href="#menu1" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu3" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
					
    </div>
	
	 <div id="menu3" class="tab-pane fade">
	 
				    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ict_integration">ICT Integration 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="ict_integration" class="form-control col-md-7 col-xs-12"  name="ict_integration" placeholder="ICT Integration"  ></textarea>
                        </div>
                    </div>					
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_plan">Learning Plan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_plan" class="form-control col-md-7 col-xs-12"  name="learning_plan" placeholder="Learning Plan" required ></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_object">Learning Objectives <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_object" class="form-control col-md-7 col-xs-12"  name="learning_object" placeholder="Learning Objectives" required ></textarea>
                        </div>
                    </div>
					
					
					<a data-toggle="tab" href="#menu2" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu4" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
    </div>
	
	 <div id="menu4" class="tab-pane fade">
	 
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motivation">Motivation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="motivation" class="form-control col-md-7 col-xs-12"  name="motivation" placeholder="Motivation" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activities">Opportunities Given/Activities <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="activities" class="form-control col-md-7 col-xs-12"  name="activities" placeholder="Opportunities Given/Activities" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="presentation">Presentation/Internalization <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="presentation" class="form-control col-md-7 col-xs-12"  name="presentation" placeholder="Presentation/Internalization" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="closure">Closure/Recapitulation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="closure" class="form-control col-md-7 col-xs-12"  name="closure" placeholder="Closure/Recapitulation" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="values">Values <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="values" class="form-control col-md-7 col-xs-12"  name="values" placeholder="Values" required ></textarea>
                        </div>
                    </div>
					
					<a data-toggle="tab" href="#menu3" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu5" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
					
    </div>
	
	 <div id="menu5" class="tab-pane fade">
	 
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pre_lession_activity">Pre-Lesson Activities 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="pre_lession_activity" class="form-control col-md-7 col-xs-12"  name="pre_lession_activity" placeholder="Pre-Lesson Activities"  ></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post_lession_activity">Post-Lesson Activities 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="post_lession_activity" class="form-control col-md-7 col-xs-12"  name="post_lession_activity" placeholder="Post-Lesson Activities"  ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="adaptation">Adaptations for Low Achievers <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="adaptation" class="form-control col-md-7 col-xs-12"  name="adaptation" placeholder="Adaptations for Low Achievers" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="extensions">Extensions for High Achievers <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="extensions" class="form-control col-md-7 col-xs-12"  name="extensions" placeholder="Extensions for High Achievers" required ></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elements">Cross-disciplinary Elements 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="elements" class="form-control col-md-7 col-xs-12"  name="elements" placeholder="Cross-disciplinary Elements"  ></textarea>
                        </div>
                    </div>
					
					<a data-toggle="tab" href="#menu4" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu6" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
					
    </div>
	
    <div id="menu6" class="tab-pane fade">
	
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="assignments">Assignment                     </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="assignments" class="form-control col-md-7 col-xs-12"  name="assignments" placeholder="Assignment"  ></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="resources">Learning Materials & Resources 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="resources" class="form-control col-md-7 col-xs-12"  name="resources" placeholder="Learning Materials & Resources"  ></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="references">References <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="references" class="form-control col-md-7 col-xs-12"  name="references" placeholder="References" required ></textarea>
                        </div>
                    </div>
					
					 <a data-toggle="tab" href="#menu5" class="btn btn-primary"> &laquo; Previous </a> 
					 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <button type="button" class="btn btn-danger" onclick="javascript:location.href=''">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success" name="send">Submit</button>
                        </div>
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
		

  
                      

      
 <?php include('footer.php'); ?>   
 


<script src="admin/assets/js/formValidation.min.js"></script>
<script src="admin/assets/js/form-validation/bootstrap.min.js"></script>

  
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   
    
    <!-- Initialize datetimepicker -->
	
	<script>
$(document).ready(function() { 

$('#add_ch_logs').formValidation({

            fields: { 
			
			selstaff:{
                    
                    validators: {
                        notEmpty: {
                            message: 'Select C.H'
                        },
						
                    }
                },				
   
                log_date: {
                    
                    validators: {
                        notEmpty: {
                            message: 'Date is required'
                        },
						
                    }
                },				
                
               
				academic: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Academics is required'
                        }
                    }
                },
				adminis: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Administration is required'
                        }
                    }
                },
				admission: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Admission is required'
                        }
                    }
                },
				staff: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Staff is required'
                        }
                    }
                },
				student: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Students is required'
                        }
                    }
                },
				program: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Program is required'
                        }
                    }
                },
				exam: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Exam is required'
                        }
                    }
                }
				
                
            }
        });
        
});
</script>


<script>


    $('#myDatepicker').datetimepicker();
    
     $('#myDatepicker2').datetimepicker({
        format: 'DD/MM/YYYY'
    }); 
    
    
   
</script>

   