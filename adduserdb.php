<?php
session_start();
include "connection.php";
$ID=mysqli_real_escape_string($connect,$_GET['ID']);
$name=mysqli_real_escape_string($connect,$_GET['name']);
$address=mysqli_real_escape_string($connect,$_GET['address']);
$contact_details=mysqli_real_escape_string($connect,$_GET['contact_details']);
$password=mysqli_real_escape_string($connect,$_GET['password']);
$sql="use lmstiu;";
mysqli_query($connect,$sql);
$sql2="insert into users 
values('$ID','$name','$address','$contact_details','$password');";
$result=mysqli_query($connect,$sql2);
if ($result === false) {
    echo "Error: <br>" . mysqli_error($connect);
} else {
    echo "<br>Data deleted successfully";
}



?>