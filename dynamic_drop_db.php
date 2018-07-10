<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'lisenme';
 
//Connect and select the database
$conn =mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>