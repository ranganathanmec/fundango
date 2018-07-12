<?php
include('admin/dbcon.php'); 
$q=mysqli_query($conn,"SELECT Z.*,A.school_name,B.class_name,C.section_name,D.term_name,E.subject_name,F.lesson_name FROM progress as Z INNER JOIN school AS A ON A.school_id=Z.school_id INNER JOIN class AS B ON B.class_id=Z.class_id INNER JOIN section as C ON C.section_id=Z.section_id INNER JOIN term AS D ON D.term_id=Z.term_id INNER JOIN subjects AS E ON E.subject_id=Z.subject_id INNER JOIN lessons AS F ON F.lesson_id=Z.lesson_id");
$data=array();
while($row=mysqli_fetch_assoc($q))
{
$data[]=$row;
}

echo json_encode($data);

?>