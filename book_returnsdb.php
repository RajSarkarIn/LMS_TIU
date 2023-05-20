<?php
include "connection.php";
$book_id = $_GET['bookid'];
$user_id = $_GET['userid'];
$sql = "SELECT * FROM issuances WHERE user_id = $user_id AND book_id = $book_id";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    $sql = "UPDATE books SET copies_available = copies_available + 1 WHERE id = $book_id";
    mysqli_query($connect, $sql);

    $sql = "DELETE FROM issuances WHERE user_id = $user_id AND book_id = $book_id";
    mysqli_query($connect, $sql);

    echo "</br>Book returned successfully.";
} else {
    echo "</br>Book has already been returned or not borrowed by the user.";
}
?>