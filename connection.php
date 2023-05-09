<?php
$servername="localhost";
$username="root";
$password=8185;
$database="lmstiu";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect){
    echo "connection failed".mysqli_connect_error();
}else{
    echo("connection successful");
}


?>