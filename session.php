<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if( $_SESSION['user_type']!='admin')
{
    header("Location:login.php");
    exit(0);

}



?>