<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
		<link rel="stylesheet" href="admin/assets/css/formValidation.min.css">
   

   
  
   <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dashboard <small>Edit Profile</small></h2>
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
					if(isset($_POST['send'])){
						
						$prefix=$_POST['prefix'];
						$fname=$_POST['fname'];
						$lname=$_POST['lname'];
						// $stname=$prefix.$lname.$fname;
						$uemail=$_POST['useremail'];
						$uphone=$_POST['mobile'];
						 if($stafftype=='Principal'){
						 $scat=$_POST['staff_cat'];						   
					     $campus=$_POST['campus'];
					   }else  if($stafftype=='A.O'){
						 $scat='A.O';
						$campus=$staff_campus;						 
					   }else  if($stafftype=='C.H'){
						 $scat='C.H';
						$campus=$staff_campus;	  
					   }else{
						$scat='';
						$campus=$staff_campus;	   
					   }
						/* $scat=$_POST['staff_cat'];
						$campus=$_POST['campus']; */
						$uname=$_POST['username'];
						$upwd=$_POST['password'];
						$regdate = date('Y-m-d');
						
						
						$query = mysqli_query($conn,"update users set prefix ='$prefix',first_name='$fname',last_name='$lname',staff_type='$scat',campus='$campus',emailid='$uemail',phone='$uphone',username='$uname' where staff_id='".$edit_id."' ") ;
						
						
						if($upwd!=''){
							$query = mysqli_query($conn,"update users set password = '".md5($pass)."' where staff_id='".$edit_id."'");
						}
						
						if($query){

echo "<font color='green' style='margin-left:400px;'>Success</font>";

					}else{
					echo "<font color='green'>Error</font>";	
					}
					}	

					$se_que = mysqli_fetch_array(mysqli_query($conn,"select * from users where staff_id = '$edit_id'"));
					
					
					$getid = $_GET['id'];
					?>
                  
				   <form class="form-horizontal form-label-left" novalidate name="add_user" action="edit_member.php?id=<?php echo $getid; ?>" id="add_user" method="post" enctype="multipart/form-data">

                    
                      <span class="section">Edit Profile</span>
					  
					   
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fname"> Name Prefix <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="prefix"   name="prefix"   type="radio" value="Mr" <?php if($se_que['prefix']=='Mr'){ echo "checked"; } ?>>Mr
                          <input id="prefix1"  name="prefix"  type="radio" value="Mrs" <?php if($se_que['prefix']=='Mrs'){ echo "checked"; } ?>>Mrs
                          <input id="prefix2"   name="prefix"   type="radio" value="Ms" <?php if($se_que['prefix']=='Ms'){ echo "checked"; } ?>>Ms
                        </div>
                      </div>
					  
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fname"> First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fname" class="form-control col-md-7 col-xs-12"  name="fname" placeholder="First Name" required="required" type="text" value="<?php echo $se_que['first_name']; ?>">
                        </div>
                      </div>
                     
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lname"> Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lname" class="form-control col-md-7 col-xs-12"  name="lname" placeholder="Last Name" required="required" type="text" value="<?php echo $se_que['last_name']; ?>">
                        </div>
                      </div>
					  
					   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fname">Login Name/Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="useremail" class="form-control col-md-7 col-xs-12"  name="useremail" placeholder="Email" required="required" type="text" value="<?php echo $se_que['emailid']; ?>"  >
                        </div>
                      </div>
                     
              	  
					   <div class="item form-group"  >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prof_photo">Phone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="mobile" class="form-control col-md-7 col-xs-12"  name="mobile"  type="text" value="<?php echo $se_que['phone']; ?>">
                        </div>
                      </div>
					  
					  <?php 
					   if($stafftype=='Principal'){ ?>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="scate">Staff Category 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="staff_cat" class="form-control col-md-7 col-xs-12"  name="staff_cat">
						  <option value="">Select</option>
						  <option value="A.O" <?php if($se_que['staff_type']=='A.O'){ echo "selected"; } ?>>A.O/Registrar</option>
						  <option value="C.H" <?php if($se_que['staff_type']=='C.H'){ echo "selected"; } ?> >C.H</option>
						  </select>
                        </div>
                      </div>
					  
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="scate">Campus 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="campus" class="form-control col-md-7 col-xs-12"  name="campus">
						  <option value="">Select</option>
						  <option value="AYN" <?php if($se_que['campus']=='AYN'){ echo "selected"; } ?>>AYN</option>
						  <option value="IGK" <?php if($se_que['campus']=='IGK'){ echo "selected"; } ?> >IGK</option>
						  <option value="MV" <?php if($se_que['campus']=='MV'){ echo "selected"; } ?>>MV</option>
						  <option value="NOL" <?php if($se_que['campus']=='NOL'){ echo "selected"; } ?>>NOL</option>
						  <option value="PR" <?php if($se_que['campus']=='PR'){ echo "selected"; } ?>>PR</option>
						  </select>
                        </div>
                      </div>
					  <?php } ?>
					  
					  <div class="item form-group"  >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username/Login <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="username" class="form-control col-md-7 col-xs-12" name="username"   type="text" value="<?php echo $se_que['username']; ?>">
                        </div>
                      </div>
					  
					   <div class="item form-group"  >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prof_photo">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="form-control col-md-7 col-xs-12" name="password"   type="password">
                        </div>
                      </div>
					  
					                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                           <button type="button" class="btn btn-primary" onclick="javascript:location.href='members.php'">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success" name="send">Submit</button>
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

  
    
	
	<script>
$(document).ready(function() { 
 
// alert("dfsfsdf");
$('#add_user').formValidation({

            fields: { 
   
               
                useremail: {
                    validators: {
                        notEmpty: {
                            message: 'Email is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        },
						 regexp: {
                            regexp: '^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$',
                            message: 'The value is not a valid email address'
                        }
                    }
                },
				mobile: {
                   
                    validators: {
                        notEmpty: {
                            message: 'Phone Number is required'
                        },
						numeric: {
                        message: 'Mobile Number must be a Valid number'
                    },
                    stringLength: {
                        min: 10,
                        max: 10,
                        message: 'Mobile Number must be 10 digit long'
                    },
                    }
                }
				 username: {
                    
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
						regexp: {
                        regexp: /^[A-Za-z0-9 ]+$/,
                        message: 'Name consist of Alphanumeric'
                    } 
                    }
                }				
                
				
				
                
            }
        });
        
});
</script>

