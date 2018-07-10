
<?php
include('admin/dbcon.php');
session_start();
$cont_id = base64_decode($_GET['id']);	
$sql = "DELETE FROM lesson_plan_6thto8th WHERE lp_id=$cont_id";
$query = mysqli_query($conn,$sql)or die(mysqli_error());
if($query){
header("location:list_6thto8thplan.php");	

}else{
echo "error";	
}
?>