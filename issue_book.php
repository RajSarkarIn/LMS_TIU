<?php
include "connection.php";


$bookId = $_GET['bookid'];
$userId = $_GET['userid'];

$bookQuery = "SELECT * FROM books WHERE id = $bookId";
$userQuery = "SELECT * FROM users WHERE id = $userId";

$bookResult = mysqli_query($connect, $bookQuery);
$userResult = mysqli_query($connect, $userQuery);

if (mysqli_num_rows($bookResult) > 0 && mysqli_num_rows($userResult) > 0) {
    $bookRow = mysqli_fetch_assoc($bookResult);
    $copiesAvailable = $bookRow['copies_available'];
    
    if ($copiesAvailable > 0) {

        $deductStockQuery = "UPDATE books SET copies_available = copies_available - 1 WHERE id = $bookId";
        mysqli_query($connect, $deductStockQuery);

        $issuanceDate = date("Y-m-d");
        $insertIssuanceQuery = "INSERT INTO issuances (book_id, user_id, issuance_date)
                                VALUES ($bookId, $userId, '$issuanceDate')";
        mysqli_query($connect, $insertIssuanceQuery);
        
        echo "</br>Book issued successfully";
    } else {
        echo "</br>Book is not available";
    }
} else {
    echo "</br>Book or user does not exist";
}
?>
