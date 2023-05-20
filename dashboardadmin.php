<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Admin DashBoard LMS_TIU</title>
</head>

<body>
    <?php include "header.php";?>
    <div class="cont">
        <div class="BookInsert">
            <img src="images/bookissue.svg" alt="img">
            <a href="bookinsert.php" target="_blank">Enter a Book</a>
        </div>
        <div class="BookDel">
            <img src="images/book.svg" alt="book">
            <a href="BookDelete.php" target="_blank">Book Delete</a>
        </div>
    </div>
    
    <div class="cont">

        <div class="BookIssue">
            <img src="images/bookissue.svg" alt="img">
            <a href="bookissue.php">Book Issue</a>
        </div>
        <div class="BookReturn">
            <img src="images/book.svg" alt="book">
            <a href="book_returns.php">Book Return</a>
        </div>
        <div class="Stock">
            <img src="images/book.svg" alt="book">
            <a href="stock.php">Stock</a>
        </div>
    </div>
    <div class="cont2">

        <div class="AddUser">
            <img src="images/adduser.svg" alt="add user">
            <a href="adduser.php" target="_blank">Add User</a>
        </div>
        <div class="Removeuser">
            <img src="images/book.svg" alt="book">
            <a href="removeuser.php" target="_blank">Remove User</a>
        </div>
        <div class="ResetPass">
            <i class="fa-solid fa-key" style="color:black;font-size:100px;"></i>
            <a href="passwordreset.php" target="_blank" style="font-size:1.2rem;">Reset admin Password</a>
        </div>

    </div>
    <?php include "footer.php"?>








</body>

</html>