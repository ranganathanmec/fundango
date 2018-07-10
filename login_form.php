<?php 
session_start();

include('admin/dbcon.php');
$errormsg="";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>


  <body class="login">

  <?php 
   
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login_submit'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM adminlogin WHERE admin_username='$username' AND admin_password='$password'";


  $result = mysqli_query($conn,$query)or die(mysqli_error($conn));
  $row = mysqli_fetch_array($result);
  $num_row = mysqli_num_rows($result);
if( $num_row > 0 )
 { 		
  $_SESSION['user_type']='admin';
  $_SESSION['admin_id']=$row['admin_id'];

  header('Location: dashboard.php');
}		
else 
  {
    $errormsg="Invalid Credentials";
  }
}
?>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
		  <img src="production/images/photo.jpg" width="230px" height="200px">
            <form name="admin_login" id="admin_login"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="" />
                <span style="color:red"><?php  echo $errormsg;?></span>
              </div>
              <div>
			  <input class="btn btn-default submit" type="submit" name="login_submit" value="Log in">
                <!-- <a class="btn btn-default submit" >Log in</a>
                 <a class="reset_pass" href="#">Lost your password?</a>-->
              </div> 

              <div class="clearfix"></div>

            
            </form>
			<span style="margin-left:220px;">Powered by <a href="http://www.lokas.in" target="_blank">Lokas</a> <span>
          </section>
		  
        </div>

      
      </div>
	  
    </div>
	   <?php  // include('footer.php'); ?>    
   
       
  </body>
       
</html>


        