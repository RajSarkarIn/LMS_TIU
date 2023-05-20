<?php 
session_start();
include "connection.php";
$username=mysqli_real_escape_string($connect,$_GET["username"]);
$newpass=mysqli_real_escape_string($connect,$_GET['newpass']);
$sql1="use lmstiu";
mysqli_query($connect,$sql1);
$sql2 = "update admin_login 
set password='$newpass'
where username='$username';";
$result=mysqli_query($connect,$sql2);
if ($result === false) {
    echo "Error: <br>" . mysqli_error($connect);
} else {
    echo "<br>Password Reset Successfully";
}
?>