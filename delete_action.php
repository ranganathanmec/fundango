<?php 
include('admin/dbcon.php');
session_start();

if(isset($_GET['user_id']))
{
    $user_id= base64_decode($_GET['user_id']);	
    $sql = "DELETE FROM login WHERE user_id=$user_id";
    $query = mysqli_query($conn,$sql)or die(mysqli_error());
    if($query){
    header("location:list_users.php");	
    
    }else{
    echo "error";	
    }
}

if(isset($_GET['school_id']))
{
    $school_id= base64_decode($_GET['school_id']);	
    $sql = "DELETE login,school,class,section FROM school INNER JOIN login ON school.school_id=login.school_id INNER JOIN class on class.school_id=school.school_id INNER JOIN section on section.class_id=class.class_id WHERE school.school_id=$school_id";
    $query = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if(mysqli_affected_rows($conn)>0)
    {
        header("location:list_schools.php");
    }
    else
    {
        $sql = "DELETE school,class,section FROM school INNER JOIN class on class.school_id=school.school_id INNER JOIN section on section.class_id=class.class_id WHERE school.school_id=$school_id";
        $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
        if(mysqli_affected_rows($conn)>0)
        {
            header("location:list_schools.php");
        }
        else
        {
          $query=mysqli_query($conn,"DELETE FROM school WHERE school.school_id=$school_id")or die(mysqli_error($conn));
          if($query)
          {
            header("location:list_schools.php");
          }


        }

    }

    
   
}

if(isset($_GET['class_id']))
{
    $class_id= base64_decode($_GET['class_id']);	
    $sql = "DELETE login,class,section FROM class INNER JOIN section on section.class_id=class.class_id INNER JOIN login ON login.class_id=class.class_id WHERE class.class_id=$class_id";
    $query = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if($query){
    header("location:list_classes.php");	
    
    }else{
    echo "error";	
    }
}

if(isset($_GET['section_id']))
{
    $section_id= base64_decode($_GET['section_id']);	
    $sql = "DELETE login,section FROM section INNER JOIN login ON section.section_id=login.section_id WHERE section.section_id=$section_id";
    $query = mysqli_query($conn,$sql)or die(mysqli_error());
    if($query){
    header("location:list_sections.php");	
    
    }else{
    echo "error";	
    }
}

if(isset($_GET['subject_id']))
{
    $subject_id= base64_decode($_GET['subject_id']);	
    $sql = "DELETE FROM subjects WHERE subject_id=$subject_id";
    $query = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if($query){
    header("location:list_subjects.php");	
    
    }else{
    echo "error";	
    }
}

if(isset($_GET['term_id']))
{

    $term_id= base64_decode($_GET['term_id']);	
    $sql = "DELETE FROM term WHERE term_id=$term_id";
    $query = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if($query){
    header("location:list_terms.php");	
    
    }else{
    echo "error";	
    }
}

if(isset($_GET['lesson_id']))
{

    $lesson_id= base64_decode($_GET['lesson_id']);	
    $sql = "DELETE FROM lessons WHERE lesson_id=$lesson_id";
    $row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT lesson_file,assessment_file FROM lessons WHERE lesson_id='$lesson_id'"));
    
    $d_less="uploads/".$row['lesson_file'];
    $d_ass="uploads/".$row['assessment_file'];
    $query = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if($query){
        unlink($d_less);
        unlink($d_ass);
    header("location:list_lessons.php");	
    
    }else{
    echo "error";	
    }
  
}   
?>