<?php
		include('admin/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		
$query = "SELECT * FROM adminlogin WHERE admin_username='$username' AND admin_password='$password'";


			$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
		if( $num_row > 0 )
		 { 		
			$_SESSION['username']=$username;
			$_SESSION['admin_id']=$row['admin_id'];
			header('Location: dashboard.php');
		}		
		else 
			{
				header('Location:login_form.php');
			}

?>