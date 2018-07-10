<?php
$conn=mysqli_connect('localhost','root','','fundango');
if($_SERVER['REQUEST_METHOD']=='GET'){
   
    $num=$_GET['nx'];
    $data=array();
    $res=mysqli_query($conn,"SELECT section_name FROM `section` WHERE class_id='$num' ");
    while($row=mysqli_fetch_assoc($res))
       $data[]=$row['section_name'];

    echo json_encode($data);

}

?>