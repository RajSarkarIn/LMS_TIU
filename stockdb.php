<?php
include "connection.php"; // Make sure you have a valid connection in this file

$book = $_GET['book_id'];
$sql = "SELECT *
        FROM books
        WHERE id = $book;";
$result = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>ID: " . $row['id'] . "<br>";
    echo "Title: " . $row['title'] . "<br>";
    echo "Author: " . $row['author'] . "<br>";
    echo "Publisher: " . $row['publisher'] . "<br>";
    echo "Publication Date: " . $row['publication_date'] . "<br>";
    echo "Copies Available: " . $row['copies_available'] . "<br>";
    echo "<br>";
    echo "<hr>";
}
?>
