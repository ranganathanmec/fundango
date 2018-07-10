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
                    <h2>Lesson Plan Managements <small>Edit Lesson Plan </small></h2>
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
					
					$edit_id = base64_decode($_GET['id']);
					// echo $session_id;
					if(isset($_POST['send'])){
							
						$class=$_POST['selclass'];											
						$group_size=$_POST['group_size'];											
						$subject=$_POST['subject'];											
						$topics=$_POST['topics'];											
						$date_duration=$_POST['date_duration'];											
						$duration=$_POST['duration'];											
						$concept=$_POST['concept'];											
						$learning_outcome=$_POST['learning_outcome'];											
						$assessment_evidence=$_POST['assessment_evidence'];											
						$paradigm=$_POST['paradigm'];											
						$teaching_style=$_POST['teaching_style'];											
						$learning_style=$_POST['learning_style'];											
						$teaching_strategey=$_POST['teaching_strategey'];											
						$learning_techniques=$_POST['learning_techniques'];											
						$teaching_techniques=$_POST['teaching_techniques'];											
						$learning_tools=$_POST['learning_tools'];											
						$teaching_skills=$_POST['teaching_skills'];											
						$specific_skills=$_POST['specific_skills'];											
						$ict_integration=$_POST['ict_integration'];											
						$learning_plan=$_POST['learning_plan'];											
						$learning_object=$_POST['learning_object'];											
						$motivation=$_POST['motivation'];

						$teach_act1=$_POST['teach_act1'];
						$stud_act1=$_POST['stud_act1'];
						$assessment1=$_POST['assessment1'];
						$ln_mat1=$_POST['ln_mat1'];
						$teach_act2=$_POST['teach_act2'];
						$stud_act2=$_POST['stud_act2'];
						$assessment2=$_POST['assessment2'];
						$ln_mat2=$_POST['ln_mat2'];
						$teach_act3=$_POST['teach_act3'];
						$stud_act3=$_POST['stud_act3'];
						$assessment3=$_POST['assessment3'];
						$ln_mat3=$_POST['ln_mat3'];
						$teach_act4=$_POST['teach_act4'];
						$stud_act4=$_POST['stud_act4'];
						$assessment4=$_POST['assessment4'];
						$ln_mat4=$_POST['ln_mat4'];
						$teach_act5=$_POST['teach_act5'];
						$stud_act5=$_POST['stud_act5'];
						$assessment5=$_POST['assessment5'];
						$ln_mat5=$_POST['ln_mat5'];
						
						$activities=$_POST['activities'];											
						$presentation=$_POST['presentation'];											
						$closure=$_POST['closure'];											
						$lpvalues=$_POST['lpvalues'];											
						$pre_lession_activity=$_POST['pre_lession_activity'];											
						$post_lession_activity=$_POST['post_lession_activity'];											
						$adaptation=$_POST['adaptation'];											
						$extensions=$_POST['extensions'];											
						$elements=$_POST['elements'];											
						$assignments=$_POST['assignments'];											
						$resources=$_POST['resources'];											
						$lpreferences=$_POST['lpreferences'];											
						$add_info=$_POST['add_info'];											
							
						

 	 $query = mysqli_query($conn,"UPDATE `lesson_plan_6thto8th` SET class='$class',  group_size='$group_size', subject='$subject', topics='$topics', date_duration='$date_duration',duration='$duration', concept='$concept', learning_outcome='$learning_outcome', assessment_evidence='$assessment_evidence', paradigm='$paradigm', teaching_style='$teaching_style', learning_style='$learning_style', teaching_strategey='$teaching_strategey', learning_techniques='$learning_techniques', teaching_techniques='$teaching_techniques', learning_tools='$learning_tools', teaching_skills='$teaching_skills', specific_skills='$specific_skills', ict_integration='$ict_integration', learning_plan='$learning_plan', learning_object='$learning_object', motivation='$motivation', teach_act1='$teach_act1',stud_act1='$stud_act1',assessment1='$assessment1',ln_mat1='$ln_mat1',teach_act2='$teach_act2',stud_act2='$stud_act2',assessment2='$assessment2',ln_mat2='$ln_mat2',teach_act3='$teach_act3',stud_act3='$stud_act3',assessment3='$assessment3',ln_mat3='$ln_mat3',teach_act4='$teach_act4',stud_act4='$stud_act4',assessment4='$assessment4',ln_mat4='$ln_mat4',teach_act5='$teach_act5',stud_act5='$stud_act5',assessment5='$assessment5',ln_mat5='$ln_mat5', activities='$activities', presentation='$presentation', closure='$closure', lpvalues='$lpvalues', pre_lession_activity='$pre_lession_activity', post_lession_activity='$post_lession_activity', adaptation='$adaptation', extensions='$extensions', elements='$elements', assignments='$assignments', resources='$resources', lpreferences='$lpreferences', add_info='$add_info',plan_updation_date=now() where lp_id='$edit_id' ")or die(mysqli_error());  
	
 	
	
	
	
		
if($query){

echo "<font color='green' style='margin-left:400px;'>Success</font>";

					}else{
					echo "<font color='green'>Error</font>";	
					}
					}
					
					$se_que = mysqli_fetch_array(mysqli_query($conn,"select * from lesson_plan_6thto8th where lp_id = '$edit_id'"));
					
					?>
                  
				   <form class="form-horizontal form-label-left" novalidate name="add_ch_logs" action="edit_6thto8thplan.php?id=<?php echo $_GET['id']; ?>" id="add_ch_logs" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Edit Plan Info</span>
					  <span style="color:red;margin-left:990px;">* indicating mandatory fields</span>
					  
					 
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">Class<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="selclass" class="form-control col-md-7 col-xs-12"  name="selclass" required>
						  <option value="">Select Class</option>
						  <option value="KG" <?php if($se_que['class']=='KG'){ echo "selected"; }?>>KG</option>
						  <option value="1" <?php if($se_que['class']=='1'){ echo "selected"; }?>>1</option>
						  <option value="2" <?php if($se_que['class']=='2'){ echo "selected"; }?>>2</option>
						  <option value="3" <?php if($se_que['class']=='3'){ echo "selected"; }?>>3</option>
						  <option value="4" <?php if($se_que['class']=='4'){ echo "selected"; }?>>4</option>
						  <option value="5" <?php if($se_que['class']=='5'){ echo "selected"; }?>>5</option>						  
						  <option value="6" <?php if($se_que['class']=='6'){ echo "selected"; }?>>6</option>
						  <option value="7" <?php if($se_que['class']=='7'){ echo "selected"; }?>>7</option>
						  <option value="8" <?php if($se_que['class']=='8'){ echo "selected"; }?>>8</option> 
						  <option value="9" <?php if($se_que['class']=='9'){ echo "selected"; }?>>9</option>						 					 
						  <option value="10" <?php if($se_que['class']=='10'){ echo "selected"; }?>>10</option>						 					 
						  <option value="11" <?php if($se_que['class']=='11'){ echo "selected"; }?>>11</option>						 					 
						  <option value="12" <?php if($se_que['class']=='12'){ echo "selected"; }?>>12</option>							  
						  </select>
                        </div>
                      </div>
						
						 <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group_size">Group size <span class="required" style="color:red;">*</span>
                        </label>
                        <div class='input-group  col-md-6 col-sm-6 col-xs-12' >
                            <input type='text' class="form-control" required="required" id="group_size" name="group_size" value="<?php echo $se_que['group_size']; ?>" />
                          
                        </div>
                    </div>
					
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Subject <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <select id="subject" class="form-control col-md-7 col-xs-12"  name="subject" data-size="10" required>
						  <option value="">Select Subject</option>	
						  
						  <?php $subj = mysqli_query($conn,"select * from subject order by subject_id ASC");	
while($sub_row = mysqli_fetch_array($subj)){

?>					  
	<option value="<?php echo $sub_row['sub_title'];?>" <?php if($se_que['subject']==$sub_row['sub_title']){ echo "selected"; }?>><?php echo ucfirst($sub_row['sub_title']);?></option>

<?php 
/* if($sub_row['sub_title']=='social science'){ ?>
<option value="socialscience" <?php if($se_que['subject']=='socialscience'){ echo "selected"; }?>><?php echo ucfirst($sub_row['sub_title']);?></option>

<?php
}
if($sub_row['sub_title']=='computer science'){ ?>
<option value="computerscience" <?php if($se_que['subject']=='computerscience'){ echo "selected"; }?>><?php echo ucfirst($sub_row['sub_title']);?></option>
<?php
}
if($sub_row['sub_title']=='business studies'){ ?>
<option value="businessstudies" <?php if($se_que['subject']=='businessstudies'){ echo "selected"; }?>><?php echo ucfirst($sub_row['sub_title']);?></option>
<?php
}
if($sub_row['sub_title']=='mass media1'){ ?>
<option value="massmedia1" <?php if($se_que['subject']=='massmedia1'){ echo "selected"; }?>><?php echo ucfirst($sub_row['sub_title']);?></option>
<?php
}
if($sub_row['sub_title']=='mass media2'){ ?>
<option value="massmedia2" <?php if($se_que['subject']=='massmedia2'){ echo "selected"; }?>><?php echo ucfirst($sub_row['sub_title']);?></option>
<?php
} */
} ?>

						  
						 <!--  <option value="english" <?php if($se_que['subject']=='english'){ echo "selected"; }?>>English</option>
						  <option value="l2-tamil" <?php if($se_que['subject']=='l2-tamil'){ echo "selected"; }?>>L2-Tamil</option>
						  <option value="l2-hindi" <?php if($se_que['subject']=='l2-hindi'){ echo "selected"; }?>>L2-Hindi</option>
						  <option value="l2-french" <?php if($se_que['subject']=='l2-french'){ echo "selected"; }?>>L2-French</option>
						  <option value="l3-tamil" <?php if($se_que['subject']=='l3-tamil'){ echo "selected"; }?>>L3-Tamil</option>
						  <option value="l3-hindi" <?php if($se_que['subject']=='l3-hindi'){ echo "selected"; }?>>L3-Hindi</option>
						  <option value="l3-french" <?php if($se_que['subject']=='l3-french'){ echo "selected"; }?>>L3-French</option>
						  <option value="maths" <?php if($se_que['subject']=='maths'){ echo "selected"; }?>>Maths</option>
						  <option value="science" <?php if($se_que['subject']=='science'){ echo "selected"; }?>>Science</option>
						  <option value="socialscience" <?php if($se_que['subject']=='socialscience'){ echo "selected"; }?>>Social Science</option>	

-->						  
						  </select>
						  
                       
                        </div>
                      </div>
					 
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topics">Lesson No & Topic <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type='text' class="form-control" required="required" id="topics" name="topics" value="<?php echo $se_que['topics']; ?>" />
                        </div>
                      </div>
					  
					  <?php  	 $edt = $se_que['date_duration'];					 				
							 $imdate = explode(' ',$edt);						
							 $datee = str_replace('-', '.', $imdate[0]);
							 $imdated = explode('.',$datee);
							 $sdf =  $imdated[2].'.'.$imdated[1].'.'.$imdated[0].' '.$imdate[1] ;
					?>
						
						
					 <div class="item form-group" style="margin-left:10px;">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_duration"> Date <span class="required" style="color:red;">*</span>
                        </label>
                        <div class='input-group date col-md-6 col-sm-6 col-xs-12' id='myDatepicker2' >
                            <input type='text' class="form-control" required="required" id="date_duration" name="date_duration" value="<?php echo $sdf; ?>"/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
					  
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duration">Duration(in hours) <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type='text' class="form-control" required="required" id="duration" name="duration" required value="<?php echo $se_que['duration']; ?>" />
                        </div>
                      </div>
					  
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="concept">Concepts <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="concept" class="form-control col-md-7 col-xs-12"  name="concept" placeholder="Concepts" required="required" ><?php echo $se_que['concept'];?></textarea>
                        </div>
                      </div>
					  
					  <a data-toggle="tab" href="#menu1" class="btn btn-primary" style="margin-left:995px;">Next >> </a>
					
    </div>
    <div id="menu1" class="tab-pane fade">
	
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_object">Learning Objectives <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_object" class="form-control col-md-7 col-xs-12"  name="learning_object" placeholder="Learning Objectives" required="required" ><?php echo $se_que['learning_object'];?></textarea>
                        </div>
                    </div>
	
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_outcome">Learning Outcome <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_outcome" class="form-control col-md-7 col-xs-12"  name="learning_outcome" placeholder="Learning Outcome" required="required" ><?php echo $se_que['learning_outcome'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="assessment_evidence">Evidence 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="assessment_evidence" class="form-control col-md-7 col-xs-12"  name="assessment_evidence" placeholder="Assessment/Evidence" ><?php echo $se_que['assessment_evidence'];?></textarea>
                        </div>
                    </div>
					
					<a data-toggle="tab" href="#home" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu2" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
					
    </div>
    <div id="menu2" class="tab-pane fade">
	
					<!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paradigm">Paradigm 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="paradigm" class="form-control col-md-7 col-xs-12"  name="paradigm" placeholder="Paradigm" ><?php // echo $se_que['paradigm'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_style">Teaching Style 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_style" class="form-control col-md-7 col-xs-12"  name="teaching_style" placeholder="Teaching Style" ><?php // echo $se_que['teaching_style'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_style">Learning Style <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_style" class="form-control col-md-7 col-xs-12"  name="learning_style" placeholder="Learning Style" required ><?php // echo $se_que['learning_style'];?></textarea>
                        </div>
                    </div> -->
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_strategey">Teaching Strategy <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_strategey" class="form-control col-md-7 col-xs-12"  name="teaching_strategey" placeholder="Teaching Strategy" required ><?php echo $se_que['teaching_strategey'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_techniques">Learning Techniques
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_techniques" class="form-control col-md-7 col-xs-12"  name="learning_techniques" placeholder="Learning Techniques" ><?php echo $se_que['learning_techniques'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_techniques">Teaching Techniques 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_techniques" class="form-control col-md-7 col-xs-12"  name="teaching_techniques" placeholder="Teaching Techniques" ><?php echo $se_que['teaching_techniques'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_tools">Learning Tools <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_tools" class="form-control col-md-7 col-xs-12"  name="learning_tools" placeholder="Learning Tools" required><?php echo $se_que['learning_tools'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="teaching_skills">Teaching Skills <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="teaching_skills" class="form-control col-md-7 col-xs-12"  name="teaching_skills" placeholder="Teaching Skills" required ><?php echo $se_que['teaching_skills'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="specific_skills">Subject-Specific Skills <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="specific_skills" class="form-control col-md-7 col-xs-12"  name="specific_skills" placeholder="Subject-Specific Skills" required ><?php echo $se_que['specific_skills'];?></textarea>
                        </div>
                    </div>
					
					
					
					<a data-toggle="tab" href="#menu1" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu3" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
					
    </div>
	
	 <div id="menu3" class="tab-pane fade">
	 
					<!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pre_lession_activity">Pre-Lesson Activities <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="pre_lession_activity" class="form-control col-md-7 col-xs-12"  name="pre_lession_activity" placeholder="Pre-Lesson Activities" required ><?php echo $se_que['pre_lession_activity'];?></textarea>
                        </div>
                    </div> -->
					
	 
				    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ict_integration">ICT Integration 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="ict_integration" class="form-control col-md-7 col-xs-12"  name="ict_integration" placeholder="ICT Integration"  ><?php echo $se_que['ict_integration'];?></textarea>
                        </div>
                    </div>					
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_plan">Learning Plan <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_plan" class="form-control col-md-7 col-xs-12"  name="learning_plan" placeholder="Learning Plan" required ><?php echo $se_que['learning_plan'];?></textarea>
                        </div>
                    </div>
					
					<!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="learning_object">Learning Objectives <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="learning_object" class="form-control col-md-7 col-xs-12"  name="learning_object" placeholder="Learning Objectives" required ><?php // echo $se_que['learning_object'];?></textarea>
                        </div>
                    </div> -->
					
					
					<a data-toggle="tab" href="#menu2" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu4" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
    </div>
	
	 <div id="menu4" class="tab-pane fade">
	 
	 
					<table  class="table table-bordered">
					<tr><th>DIMENSIONS OF LEARNING  </th><th>Teacher activity  </th><th>Student activity  </th><th>Assessment (Formative/Diagnostic)  </th><th>Learning materials/resources/references  </th></tr>
					<tr><th>(D1) Motivation </th>
					<th><div class="form-group"><textarea id="teach_act1" class="form-control"  name="teach_act1"  required ><?php echo $se_que['teach_act1'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="stud_act1" class="form-control"  name="stud_act1"  required ><?php echo $se_que['stud_act1'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="assessment1" class="form-control"  name="assessment1"  required><?php echo $se_que['assessment1'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="ln_mat1" class="form-control"  name="ln_mat1"  required ><?php echo $se_que['ln_mat1'];?></textarea></div></th>
					</tr>
					<tr><th>(D2) Knowledge Presentation/Internalization </th>
					<th><div class="form-group"><textarea id="teach_act2" class="form-control"  name="teach_act2"  required ><?php echo $se_que['teach_act2'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="stud_act2" class="form-control"  name="stud_act2"  required ><?php echo $se_que['stud_act2'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="assessment2" class="form-control"  name="assessment2"  required><?php echo $se_que['assessment2'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="ln_mat2" class="form-control"  name="ln_mat2"  required ><?php echo $se_que['ln_mat2'];?></textarea></div></th>
					</tr>
					<tr><th>(D3) Extending & Pre-Lesson/Refining Activities  </th>
					<th><div class="form-group"><textarea id="teach_act3" class="form-control"  name="teach_act3"  required ><?php echo $se_que['teach_act3'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="stud_act3" class="form-control"  name="stud_act3"  required ><?php echo $se_que['stud_act3'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="assessment3" class="form-control"  name="assessment3"  required><?php echo $se_que['assessment3'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="ln_mat3" class="form-control"  name="ln_mat3"  required ><?php echo $se_que['ln_mat3'];?></textarea></div></th>
					</tr>
					<tr><th>(D4) meaningful task Activities </th>
					<th><div class="form-group"><textarea id="teach_act4" class="form-control"  name="teach_act4"  required ><?php echo $se_que['teach_act4'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="stud_act4" class="form-control"  name="stud_act4"  required ><?php echo $se_que['stud_act4'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="assessment4" class="form-control"  name="assessment4"  required><?php echo $se_que['assessment4'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="ln_mat4" class="form-control"  name="ln_mat4"  required ><?php echo $se_que['ln_mat4'];?></textarea></div></th>
					</tr>
					<tr><th>(D5) habits of mind Closure/Recapitulation </th>
					<th><div class="form-group"><textarea id="teach_act5" class="form-contro5"  name="teach_act5"  required ><?php echo $se_que['teach_act5'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="stud_act5" class="form-contro5"  name="stud_act5"  required ><?php echo $se_que['stud_act5'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="assessment5" class="form-contro5"  name="assessment5"  required><?php echo $se_que['assessment5'];?></textarea></div></th>
					<th><div class="form-group"><textarea id="ln_mat5" class="form-contro5"  name="ln_mat5"  required ><?php echo $se_que['ln_mat5'];?></textarea></div></th>
					</tr>
					</table>
					
	 
					<!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="motivation">Motivation <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="motivation" class="form-control col-md-7 col-xs-12"  name="motivation" placeholder="Motivation" required ><?php // echo $se_que['motivation'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activities">Opportunities Given/Activities <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="activities" class="form-control col-md-7 col-xs-12"  name="activities" placeholder="Opportunities Given/Activities" required ><?php // echo $se_que['activities'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="presentation">Presentation/Internalization <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="presentation" class="form-control col-md-7 col-xs-12"  name="presentation" placeholder="Presentation/Internalization" required ><?php // echo $se_que['presentation'];?></textarea>
                        </div>
                    </div>
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="closure">Closure/Recapitulation <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="closure" class="form-control col-md-7 col-xs-12"  name="closure" placeholder="Closure/Recapitulation" required ><?php // echo $se_que['closure'];?></textarea>
                        </div>
                    </div> -->
					
					
					<a data-toggle="tab" href="#menu3" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu5" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a>
					
    </div>
	
	 <div id="menu5" class="tab-pane fade">
	 
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="adaptation">Adaptations for Low Achievers <!-- <span class="required" style="color:red;">*</span> -->
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="adaptation" class="form-control col-md-7 col-xs-12"  name="adaptation" placeholder="Adaptations for Low Achievers"  ><?php echo $se_que['adaptation'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="extensions">Extensions for High Achievers <!-- <span class="required" style="color:red;">*</span> -->
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="extensions" class="form-control col-md-7 col-xs-12"  name="extensions" placeholder="Extensions for High Achievers"  ><?php echo $se_que['extensions'];?></textarea>
                        </div>
                    </div>
					
	 
					<!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pre_lession_activity">Pre-Lesson Activities 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="pre_lession_activity" class="form-control col-md-7 col-xs-12"  name="pre_lession_activity" placeholder="Pre-Lesson Activities"  ><?php // echo $se_que['pre_lession_activity'];?></textarea>
                        </div>
                    </div> -->
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="post_lession_activity">Post-Lesson Activities <!-- <span class="required" style="color:red;">*</span> -->
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="post_lession_activity" class="form-control col-md-7 col-xs-12"  name="post_lession_activity" placeholder="Post-Lesson Activities"  ><?php echo $se_que['post_lession_activity'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lpvalues">Values <!-- <span class="required" style="color:red;">*</span> -->
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="lpvalues" class="form-control col-md-7 col-xs-12"  name="lpvalues" placeholder="Values" ><?php echo $se_que['lpvalues'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="elements">Cross-curricular Elements <!-- <span class="required" style="color:red;">*</span> -->
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="elements" class="form-control col-md-7 col-xs-12"  name="elements" placeholder="Cross-curricular Elements"  ><?php echo $se_que['elements'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lpreferences">References <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="lpreferences" class="form-control col-md-7 col-xs-12"  name="lpreferences" placeholder="References" required ><?php echo $se_que['lpreferences'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_info">Additional Information <!-- <span class="required" style="color:red;">*</span> -->
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="add_info" class="form-control col-md-7 col-xs-12"  name="add_info" placeholder="Additional Information" ><?php echo $se_que['add_info'];?></textarea>
                        </div>
                    </div>
					
					
					<!-- <a data-toggle="tab" href="#menu4" class="btn btn-primary"> &laquo; Previous </a> <a data-toggle="tab" href="#menu6" class="btn btn-primary" style="margin-left:995px;">Next &raquo;</a> -->
					
					 <a data-toggle="tab" href="#menu4" class="btn btn-primary"> &laquo; Previous </a> 
					 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <!-- <button type="button" class="btn btn-danger" onclick="javascript:location.href=''">Cancel</button> -->
                          <button id="send" type="submit" class="btn btn-success" name="send">Submit</button>
                        </div>
                      </div>
					  
					
    </div>
	
    <!-- <div id="menu6" class="tab-pane fade">
	
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="assignments">Assignment                     </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="assignments" class="form-control col-md-7 col-xs-12"  name="assignments" placeholder="Assignment"  ><?php // echo $se_que['assignments'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="resources">Learning Materials & Resources 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="resources" class="form-control col-md-7 col-xs-12"  name="resources" placeholder="Learning Materials & Resources"  ><?php // echo $se_que['resources'];?></textarea>
                        </div>
                    </div>
					
					<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lpreferences">References <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="lpreferences" class="form-control col-md-7 col-xs-12"  name="lpreferences" placeholder="References" required ><?php // echo $se_que['lpreferences'];?></textarea>
                        </div>
                    </div>
					
					 <a data-toggle="tab" href="#menu5" class="btn btn-primary"> &laquo; Previous </a> 
					 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           
                          <button id="send" type="submit" class="btn btn-success" name="send">Submit</button>
                        </div>
                      </div>
    </div> -->
	
	
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
                            message: 'Select a Class'
                        }
                    }
        },
        
        group_size:{
            validators: {
                        notEmpty: {
                            message: 'Enter Group size'
                        }
                    }
            
        },
        subject:{
            validators: {
                        notEmpty: {
                            message: 'Select a Subject'
                        }
                    }
            
        },
		topics:{
            validators: {
                        notEmpty: {
                            message: 'Enter Lesson Topics'
                        }
                    }
            
        },
        date_duration:{
            validators: {
                        notEmpty: {
                            message: 'Select Dates'
                        }
                    }
            
        },
		duration:{
            validators: {
                        notEmpty: {
                            message: 'Enter Duration Hours'
                        }
                    }
            
        },
        concept:{
            validators: {
                        notEmpty: {
                            message: 'Enter Concepts'
                        }
                    }
            
        },
        learning_object:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Objectives'
                        }
                    }
            
        },
        learning_outcome:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Outcome'
                        }
                    }
            
        },
        teaching_strategey:{
            validators: {
                        notEmpty: {
                            message: 'Enter Teaching Strategy'
                        }
                    }
            
        },
        learning_tools:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Tools'
                        }
                    }
            
        },
        teaching_skills:{
            validators: {
                        notEmpty: {
                            message: 'Enter Teaching Skills'
                        }
                    }
            
        },
        specific_skills:{
            validators: {
                        notEmpty: {
                            message: 'Enter Subject-Specific Skills'
                        }
                    }
            
        },
        /* pre_lession_activity:{
            validators: {
                        notEmpty: {
                            message: 'Enter Pre-Lesson Activities'
                        }
                    }
            
        }, */
        learning_plan:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Plan'
                        }
                    }
            
        },
         /* teach_act1:{
            validators: {
                        notEmpty: {
                            message: 'Enter Teacher Activities of Motivation'
                        }
                    }
            
        },
        stud_act1:{
            validators: {
                        notEmpty: {
                            message: 'Enter Student Activities of Motivation '
                        }
                    }
            
        },
        assessment1:{
            validators: {
                        notEmpty: {
                            message: 'Enter Assessment of Motivation'
                        }
                    }
            
        },
        ln_mat1:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Materials of Motivation'
                        }
                    }
            
        },
		teach_act2:{
            validators: {
                        notEmpty: {
                            message: 'Enter Teacher Activities of Internalization'
                        }
                    }
            
        },
        stud_act2:{
            validators: {
                        notEmpty: {
                            message: 'Enter Student Activities of Internalization '
                        }
                    }
            
        },
        assessment2:{
            validators: {
                        notEmpty: {
                            message: 'Enter Assessment of Internalization'
                        }
                    }
            
        },
        ln_mat2:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Materials of Internalization'
                        }
                    }
            
        },
		teach_act3:{
            validators: {
                        notEmpty: {
                            message: 'Enter Teacher Activities of Refining Activities'
                        }
                    }
            
        },
        stud_act3:{
            validators: {
                        notEmpty: {
                            message: 'Enter Student Activities of Refining Activities '
                        }
                    }
            
        },
        assessment3:{
            validators: {
                        notEmpty: {
                            message: 'Enter Assessment of Refining Activities'
                        }
                    }
            
        },
        ln_mat3:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Materials of Refining Activities'
                        }
                    }
            
        },
		
		teach_act4:{
            validators: {
                        notEmpty: {
                            message: 'Enter Teacher Activities of Task Activities'
                        }
                    }
            
        },
        stud_act4:{
            validators: {
                        notEmpty: {
                            message: 'Enter Student Activities of Task Activities '
                        }
                    }
            
        },
        assessment4:{
            validators: {
                        notEmpty: {
                            message: 'Enter Assessment of Task Activities'
                        }
                    }
            
        },
        ln_mat4:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Materials of Task Activities'
                        }
                    }
            
        },
		teach_act5:{
            validators: {
                        notEmpty: {
                            message: 'Enter Teacher Activities of Recapitulation'
                        }
                    }
            
        },
        stud_act5:{
            validators: {
                        notEmpty: {
                            message: 'Enter Student Activities of Recapitulation '
                        }
                    }
            
        },
        assessment5:{
            validators: {
                        notEmpty: {
                            message: 'Enter Assessment of Recapitulation'
                        }
                    }
            
        },
        ln_mat5:{
            validators: {
                        notEmpty: {
                            message: 'Enter Learning Materials of Recapitulation'
                        }
                    }
            
        }, */
        
        lpreferences:{
            validators: {
                        notEmpty: {
                            message: 'Enter Referrences'
                        }
                    }
            
        },
        /* add_info:{
            validators: {
                        notEmpty: {
                            message: 'Enter Additional Info'
                        }
                    }
            
        }, */
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
   
</script>


   