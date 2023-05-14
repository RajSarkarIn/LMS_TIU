<?php 
session_start();
include "connection.php";
$id=mysqli_real_escape_string($connect,$_GET["ID"]);
$sql1="use lmstiu";
mysqli_query($connect,$sql1);
$sql2 = "DELETE FROM books WHERE id = '$id'";
$result=mysqli_query($connect,$sql2);
if ($result === false) {
    echo "Error: <br>" . mysqli_error($connect);
} else {
    echo "<br>Data deleted successfully";
}
?>