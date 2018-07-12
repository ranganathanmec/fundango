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
                        


                        $user_name=$_POST['user_name'];
                        $password=$_POST['password'];  
                        $school_id=$_POST['school_id'];
                        $class_id=$_POST['class_id'];
                        $section_id=$_POST['section_id'];
                        $status=$_POST['status'];
                        $_id_user=$_POST['us_id'];
                        


                       /* if(! (mysqli_num_rows(mysqli_query($conn,"select *  from login where school_id=$school_id and class_id=$class_id and section_id=$section_id"))>0))
                            { */
                                $que="UPDATE`login` set `user_name`='$user_name',`password`='$password',`class_id`='$class_id',`status`='$status',`section_id`='$section_id' where user_id='$_id_user'";
                                $query = mysqli_query($conn,$que);
                                    
                                if($query)
                                {    
                                     
                                   /*
                                    header("Location:list_users.php");
                                    echo "<font color='green' style='margin-left:400px;'>Successfully Updated</font>";
                                    */
                                    echo '<script>window.location.href="list_users.php";alert("User Updated");</script>';
                        
                                }
                                else
                                {
                                    echo "<font color='green' style='margin-left:400px;'>Error</font>";	
                                }
                        
                                /*
                            }
                        else
                             echo '<script>window.history.go(-1);alert("User Aready Mapped");</script>';
                        */
                    }

					?>

   <?php if(isset($_GET['user_id']))
   { 
       $u_user_id=base64_decode($_GET['user_id']);
       $q=mysqli_query($conn,"SELECT login.*,school.school_name,section.section_name FROM `login` inner JOIN school on school.school_id=login.school_id INNER JOIN section on section.section_id=login.section_id WHERE login.user_id='$u_user_id'");
       $row=mysqli_fetch_assoc($q);
       $cl_id=$row['class_id'];
       $sec_name=$row['section_name'];
       $usr_n=$row['user_name'];
       $pass=$row['password'];
       $stat=$row['status'];
       $sec_id=$row['section_id'];
       $schoolid=$row['school_id'];
       


       //var_dump($row);
       
       ?>
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users Management <small>Update Users </small></h2>
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

                    
                      <span class="section">Update User</span>  
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
                                
                                <select id="school_id" class="form-control col-md-7 col-xs-12"  name="school_id" >
                                    <option value="<?php echo $row['school_id'];?>" readonly ><?php echo $row['school_name']; ?></option> 
                                       

                             </select>
						  
                            </div>
                      </div>



                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">Class name<span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php $res=mysqli_query($conn,"SELECT class_id,class_name FROM `class` where school_id='$schoolid'and status=1 "); ?>
                                <select id="class_id" class="form-control col-md-7 col-xs-12"  name="class_id" >
                                    <option value="">Please Select Class</option> 
                                        <?php 
                                            while($row=mysqli_fetch_assoc($res)){
                                                
                                                $xz=$row['class_name'];
                                                $zx=$row['class_id'];
                                                if($zx==$cl_id){
                                                    echo "<option value='$zx' selected>".$xz." Standard</option>";
                                                }else{
                                                    echo "<option value='$zx'>".$xz." Standard</option>";}
                                        ?>
                                    
                                        <?php } ?>


                             </select>
						  
                            </div>
                      </div>

                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="selclass">Section Name<span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php $res=mysqli_query($conn,"SELECT section_id,section_name FROM `section` where class_id='$cl_id' and status=1 "); ?>
                                <select id="section_id" class="form-control col-md-7 col-xs-12"  name="section_id" >
                                    
                                        <?php 
                                            while($row=mysqli_fetch_assoc($res)){
                                                
                                                $xz=$row['section_name'];
                                                $zx=$row['section_id'];
                                                if($zx==$sec_id){
                                                    echo "<option value='$zx' selected>".$xz."</option>";
                                                }else{
                                                    echo "<option value='$zx'>".$xz."</option>";}
                                        ?>
                                    
                                        <?php } ?>


                             </select>
                            </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Username <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <input type="text" id="user_name" class="form-control col-md-7 col-xs-12"  name="user_name" value="<?php echo $usr_n; ?>"><span id="error_span" style="color:red"></span>
						  
						  
                       
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Password <span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						 <input type="text" id="password"  class="form-control col-md-7 col-xs-12"  name="password" value="<?php echo $pass; ?>"  ><span id="error_span1" style="color:red"></span>
						  
						  
                       
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Status">Status<span class="required" style="color:red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        
                          <select id="status" class="form-control col-md-7 col-xs-12"  name="status" >
                          <?php if($stat=='1'){ ?>
                            <option value="<?php $stat;?>" selected >Active</option>
                            <option value="0">De Active</option>

                         <?php } else { ?>

                            <option value="<?php echo $stat; ?>" selected >De Active</option>
                            <option value="1">Active</option>
                             
                         <?php }?>
                         
                          
                          
                          </select>
						  
                        </div>
                    </div>

                    <input type="text" id="us_id" name="us_id" value="<?php echo $u_user_id; ?>" hidden >
                      
					   <!-- <button type="button" class="btn btn-primary nextsetp" name="menu1"> </button> -->
					  
					
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
		

  
                      
            
                                            <?php } ?>    
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
        excluded: [''],
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
        section_id:{
                    validators: {
                        notEmpty: {
                            message: ' Please Select Section Name'
                        }
                    }
        },
        user_name:{
                    validators: {
                        notEmpty: {
                            message: ' Please Select Section Name'
                        }
                    }
        },
        password:{
                    validators: {
                        notEmpty: {
                            message: ' Please Enter Valid Passsword'
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




   
   
   $('#user_name').on('keyup',function(){
    
       var user_nx=$(this).val();
       if(user_nx.length>4)
       {
        $.ajax({
                   type:'POST',
                   url:'create_user.php',
                   data:'user_name='+user_nx,
                   success:function(us_pd){    
                       if(us_pd != 'EXIT')
                       {
                        var rxed=us_pd;
                      // $('input#password').val(rxed);
                       $('#error_span').html('');
                       $('#password').attr('disabled',false);
                      // $('#send').attr('disabled',true);
                        console.log(us_pd);

                       }
                       else{
                        $('#error_span').html('user name already exist');
                        $('#send').attr('disabled',true);
                        

                       }
                          
                   }

               });

       } 
       else
       $('#error_span').html('user name must be atleast 4 character');

       });


    $('#password').on('keyup',function(){
        $('#send').attr('disabled',true);
        var regax = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,15}$/;
        var pass=$(this).val();
        var passlength=pass.length;
        if(passlength >=8 && passlength <=15)
        {
            
            if(regax.test(pass))
            {
                $('#send').attr('disabled',false);
                $('#error_span1').html("");

            }
            else
               
            $('#error_span1').html('password must contains atleast one small letter,captial letter,number and special character');

        }
        else if(passlength<8)
            $('#error_span1').html('password must be atleast 8 characters');
        else
        $('#error_span1').html('password must be less than 16 characters');

    });

    $(document).ready(function(){
    $('#class_id').on('change',function(){
        var class_id_=$(this).val();
        console.log(class_id);
        if(class_id_)
            {
                $('#section_id').attr('disabled',false);
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'class_id_sec='+class_id_,
                    success:function(data)
                    {
                        $('#section_id').html(data);
                        
                    }
                });


                $('#send').attr('disabled',true);
            }
            else
                $('#section_id').attr('disabled',true);


    });
    })

   
</script>

   