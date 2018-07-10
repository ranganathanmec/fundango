<?php
include('admin/dbcon.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $cl_id=$_POST['class_id'];
    $q=mysqli_query($conn,"SELECT section_id,section_name from section WHERE class_id='$cl_id' and status=1 ");
    if(mysqli_num_rows($q))
    {
      echo '<option value="">Please Select Section</option>';
        while($row=mysqli_fetch_assoc($q))
            {
                echo '<option value="'.$row['section_id'].'">'.$row['section_name'].'</option>';

            }
    }else
    {
        echo "<option>No Sections Found </option>";
    }

   
    
    
}
?>