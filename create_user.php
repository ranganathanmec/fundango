<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

$username=$_POST['user_name'];

$conn=mysqli_connect('localhost','root','','fundango');
$q=mysqli_query($conn,"SELECT user_name FROM `login`");
$datax=array();
if(mysqli_num_rows($q)>0)
    {
        while($row=mysqli_fetch_assoc($q))
        {
            $datax[]=$row['user_name'];
            
        }

        //print_r($datax);

        if(in_array($username,$datax))
            echo "EXIT";
        else 
            echo substr(md5(uniqid()),3,10);
            




    }
else
    echo substr(md5(uniqid()),3,10);

}
?>