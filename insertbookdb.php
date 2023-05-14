<?php 
session_start();
include "connection.php";
$id=mysqli_real_escape_string($connect,$_GET["ID"]);
$title=mysqli_real_escape_string($connect,$_GET["title"]);
$author=mysqli_real_escape_string($connect,$_GET["author"]);
$publisher=mysqli_real_escape_string($connect,$_GET["publisher"]);
$publication_date=mysqli_real_escape_string($connect,$_GET["publication_date"]);
$copies_available=mysqli_real_escape_string($connect,$_GET["copies_available"]);
$sqluse="use lmstiu";
mysqli_query($connect,$sqluse);
$sql = "INSERT INTO books
VALUES ('$id', '$title', '$author', '$publisher', '$publication_date', '$copies_available')";
$result=mysqli_query($connect,$sql);
if ($result === false) {
    echo "Error: <br>" . mysqli_error($connect);
} else {
    echo "<br>Data inserted successfully";
}
?>
