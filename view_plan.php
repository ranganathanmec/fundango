<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>
   
 <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
   
  
   <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lesson Plan Managements <small>View 6th to 8th plan</small></h2>
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
					 $se_que = mysqli_fetch_array(mysqli_query($conn,"select * from lesson_plan_6thto8th where lp_id = '$edit_id'"));
					
					
					
					?>
                  
				   <form class="form-horizontal form-label-left" novalidate name="add_tour" action="add_tour_page.php" id="add_tour" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Lesson Plan Info</span>
					   <?php  	 $edt = $se_que['date_duration'];					 				
							 $imdate = explode(' ',$edt);						
							 $datee = str_replace('-', '.', $imdate[0]);
							 $imdated = explode('.',$datee);
							 $sdf =  $imdated[2].'.'.$imdated[1].'.'.$imdated[0].' '.$imdate[1] ;
					?>
					    
                   <table class="table table-bordered">
				   <tr><table class="table table-bordered"><tr><th>Class : <?php echo $se_que['class']; ?></th><th>Group Size : <?php echo $se_que['group_size']; ?></th><th>Subject : <?php echo $se_que['subject']; ?></th></tr></table></tr>
				   <tr><table class="table table-bordered"><tr><th>Lesson No & Topic : <?php echo $se_que['topics']; ?></th><th>Date : <?php echo $sdf; ?></th><th>Duration(in hours) : <?php echo $se_que['duration']; ?></th></tr></table></tr>
				   <tr><table class="table table-bordered"><tr><th>Concepts : <?php echo $se_que['concept'];?></th></tr></table></tr>
				   <tr>
				   <table class="table table-bordered">
				   <tr><th>Learning Objectives : <?php echo $se_que['learning_object'];?></th></tr>
				   <tr><th>Learning Outcome :<?php echo $se_que['learning_outcome'];?> </th></tr>
				   <tr><th>Assessment/Evidence : <?php echo $se_que['assessment_evidence'];?></th></tr></table>
				   </tr>
				   <tr>
				   <table  class="table table-bordered">
				   <tr><!-- <th>Paradigm : <?php // echo $se_que['paradigm'];?></th><th>Teaching Style : <?php // echo $se_que['teaching_style'];?></th> --> <th>Teaching Strategy : <?php echo $se_que['teaching_strategey'];?></th><th>Teaching Techniques : <?php echo $se_que['teaching_techniques'];?></th><th>Teaching Skills : <?php echo $se_que['teaching_skills'];?></th></tr>
				   <tr><!-- <th></th><th>Learning Style : <?php // echo $se_que['learning_style'];?></th> --> <th>Learning Techniques : <?php echo $se_que['learning_techniques'];?></th><th>Learning Tools : <?php echo $se_que['learning_tools'];?></th><th>Subject-Specific Skills : <?php echo $se_que['specific_skills'];?></th></tr></table>
				   </tr>
				   <tr>
				   <table  class="table table-bordered">
				   <tr><th>Pre-Lesson Activities  : <?php echo $se_que['pre_lession_activity'];?></th></tr>
				   <tr><th>ICT Integration : <?php echo $se_que['ict_integration'];?></th></tr>
				   <tr><th>Learning Plan : <?php echo $se_que['learning_plan'];?></th></tr>
				  </table>
				   </tr>
				   
				   <!-- <tr>
				   <table  class="table table-bordered"><tr><th>Content And Teacher Activity</th><th>Learning Activity</th><th>Assignment</th><th>Learning Materials & Resources</th></tr>
				   <tr><th>Motivation  : <?php // echo $se_que['motivation'];?></th><th><?php // echo $se_que['assignments'];?></th><th><?php // echo $se_que['resources'];?></th></tr>
				  </table>
				   </tr>-->
				   
				   <table  class="table table-bordered">
					<tr><th>DIMENSIONS OF LEARNING  </th><th>Teacher activity  </th><th>Student activity  </th><th>Assessment (diagnostic)  </th><th>Learning materials/resources/references  </th></tr>
					<tr><th>(D1) Motivation </th>
					<th><?php echo $se_que['teach_act1'];?></th>
					<th><?php echo $se_que['stud_act1'];?></th>
					<th><?php echo $se_que['assessment1'];?></th>
					<th><?php echo $se_que['ln_mat1'];?></th>
					</tr>
					<tr><th>(D2) Knowledge Presentation/Internalization </th>
					<th><?php echo $se_que['teach_act2'];?></th>
					<th><?php echo $se_que['stud_act2'];?></th>
					<th><?php echo $se_que['assessment2'];?></th>
					<th><?php echo $se_que['ln_mat2'];?></th>
					</tr>
					<tr><th>(D3) Extending & refining Activities  </th>
					<th><?php echo $se_que['teach_act3'];?></th>
					<th><?php echo $se_que['stud_act3'];?></th>
					<th><?php echo $se_que['assessment3'];?></th>
					<th><?php echo $se_que['ln_mat3'];?></th>
					</tr>
					<tr><th>(D4) meaningful task Activities </th>
					<th><?php echo $se_que['teach_act4'];?></th>
					<th><?php echo $se_que['stud_act4'];?></th>
					<th><?php echo $se_que['assessment4'];?></th>
					<th><?php echo $se_que['ln_mat4'];?></th>
					</tr>
					<tr><th>(D5) habits of mind Closure/Recapitulation </th>
					<th><?php echo $se_que['teach_act5'];?></th>
					<th><?php echo $se_que['stud_act5'];?></th>
					<th><?php echo $se_que['assessment5'];?></th>
					<th><?php echo $se_que['ln_mat5'];?></th>
					</tr>
					</table>
					
				   
				  
				   
				   
					<tr><table  class="table table-bordered">
					<tr><th>Adaptations for Low Achievers : <?php echo $se_que['adaptation'];?></th></tr>
					</table></tr>
					
					<tr><table  class="table table-bordered">
					 <tr><th>Extensions for High Achievers : <?php echo $se_que['extensions'];?></th></tr>
					</table></tr>
				   
				   <tr><table  class="table table-bordered">
				    <tr><th>Post-Lesson Activities : <?php echo $se_que['post_lession_activity'];?></th></tr>
				   </table></tr>
				   
				   
				   <tr><table  class="table table-bordered">
				   <tr><th>Values : <?php echo $se_que['lpvalues'];?></th></tr>
				   </table></tr>
				   
				   <tr><table  class="table table-bordered">
				   <tr><th>Cross-disciplinary Elements : <?php echo $se_que['elements'];?></th></tr>
				   </table></tr>
					
				   <tr><table  class="table table-bordered">
				   <tr><th>References : <?php echo $se_que['lpreferences'];?></th></tr>
				   </table></tr>
				   
					<tr><table  class="table table-bordered">
					<tr><th>Additional Information : <?php echo $se_que['add_info'];?></th></tr>	
					</table></tr>
 
				   </table>
                
				

                     
                      <div class="ln_solid"></div>
                      <!-- <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <button type="button" class="btn btn-primary" onclick="javascript:location.href='list_logs.php'">Cancel</button>
                         
                        </div>
                      </div> -->
                    </form>
                  </div>
                </div>
              </div>

            
           
           
          </div>
          <!-- /top tiles -->

            </div>
        <!-- /page content -->
		

  
                      

      
 <?php include('footer.php'); ?>   
  
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   
    
    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
   
</script>

   