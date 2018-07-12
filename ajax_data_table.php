<?php
include('admin/dbcon.php'); 
$q=mysqli_query($conn,"SELECT section_name,class_id,no_of_sections,status FROM section");
$data=array();
while($row=mysqli_fetch_assoc($q))
{
$data[]=$row;
}

echo json_encode($data);

?>