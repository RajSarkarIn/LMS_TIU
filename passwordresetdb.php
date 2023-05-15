<?php 
session_start();
include "connection.php";
$id=mysqli_real_escape_string($connect,$_GET["ID"]);
$newpass=mysqli_real_escape_string($connect,$_GET['newpass']);
$sql1="use lmstiu";
mysqli_query($connect,$sql1);
$sql2 = "update users 
set password='$newpass'
where id='$id';";
$result=mysqli_query($connect,$sql2);
if ($result === false) {
    echo "Error: <br>" . mysqli_error($connect);
} else {
    echo "<br>Password Reset Successfully";
}
?>