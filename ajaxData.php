<?php
//Include database configuration file
 include('admin/dbcon.php'); 
 


if(isset($_POST['sch_id']))
{
    $sid=$_POST['sch_id'];
    $limit=(mysqli_fetch_array(mysqli_query($conn,"select no_of_class from school WHERE school_id='$sid'")))['no_of_class'];
    for($i=1;$i<=$limit;$i++)
    {
        echo '<option value="'.$i.'">'.$i.'St Standard</option>';
    }

}


if(isset($_POST['f_sch_id']))
{
    $sch_id=$_POST['f_sch_id'];
    $q=mysqli_query($conn,"SELECT * from class WHERE school_id='$sch_id' ORDER by class_name");
    if(mysqli_num_rows($q)>0)
    {
        echo '<option value="" selected>Please select Class</option>';
        while($row=mysqli_fetch_array($q))
        {
            echo '<option value="'.$row['class_id'].'">'.$row['class_name'].'Standard</option>';

        }
        
    }
    else
    echo '<option value="">No Classes Found<option>';

}


if(isset($_POST['class_id_sec']))
{
    $class_id=$_POST['class_id_sec'];
    
  
    $q=mysqli_query($conn,"SELECT * from section WHERE class_id='$class_id'");
    if(mysqli_num_rows($q)>0)
    {
        echo '<option value="" selected>Please select Section</option>';
        while($row=mysqli_fetch_assoc($q))
        {
            echo '<option value="'.$row['section_id'].'">'.$row['section_name'].' Section</option>';

        }
        
           
       
       
    }
    else
    {
        echo '<option value="">No Section Found<option>'; 
    }



}

?>