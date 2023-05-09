<?php
session_start();
include "connection.php";
$uname= mysqli_real_escape_string($connect,$_POST["username"]);
$pass=mysqli_real_escape_string($connect,$_POST["password"]);
$sql="select *
from admin_login
where username='$uname' and password='$pass';";
$result=mysqli_query($connect,$sql);
$row=mysqli_num_rows($result);
if($row==1){
    $_SESSION['username']=$uname;
    header("location:dashboardadmin.php");

}else{
    echo ("Wrong user name passowrd");
    header("location:index.php");
}

?>