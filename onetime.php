<?php
$servername = "localhost";
$username = "root";
$password = 8185;
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
    echo "connection failed" . mysqli_connect_error();
} else {
    echo ("connection successful");
}
$sql1 = "create database lmstiu;";
mysqli_query($connection, $sql1);
$sql2 = "use lmstiu;";
mysqli_query($connection, $sql2);
$sql3 = "CREATE TABLE books (
    id INT(4) PRIMARY KEY,
    title VARCHAR(50),
    author VARCHAR(50),
    publisher VARCHAR(50),
    publication_date varchar(8),
    copies_available INT(4)
  );";
mysqli_query($connection, $sql3);
$sql4="CREATE TABLE users (
    id INT(4) PRIMARY KEY,
    name VARCHAR(50),
    address VARCHAR(100),
    contact_details VARCHAR(50);";
mysqli_query($connection, $sql4);
$sql5="CREATE TABLE fines (
    id INT(4) PRIMARY KEY,
    user_id INT(4),
    amount DECIMAL(10,2),
    reason VARCHAR(100),
    date_issued varchar(8),
    FOREIGN KEY (user_id) REFERENCES users(id)
  );";
mysqli_query($connection, $sql5);
$sql6="create table admin_login(username varchar(20),password varchar(16));";
mysqli_query($connection,$sql6);
$sql7="insert into admin_login values('admin',8185);";
mysqli_query($connection,$sql7);



?>