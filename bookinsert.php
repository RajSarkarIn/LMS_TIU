<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookinsert.css">
    <title>Insert a Book</title>
</head>
<body>
    <?php include "header.php";?>
<h1 style="font-family:text1; text-align:center;">Insert a book into Database</h1>
<form  method="get" class="contbox">    
    <label for="ID">Enter ID</label>
    <input type="text" name="ID" placeholder="Enter ID" required>
    <label for="title">Enter Book Name</label>
    <input type="text" name="title" placeholder="Enter a book name" required>
    <label for="author">Enter Author Name</label>
    <input type="text" name="author" placeholder="Enter author name" required>
    <label for="publisher">Enter Publisher Name</label>
    <input type="text" name="publisher" placeholder="Enter publisher name" required>
    <label for="publication_date">Enter Publication Date</label>
    <input type="text" name="publication_date" placeholder="Enter publication date" required>
    <label for="copies_available">Enter copies available</label>
    <input type="text" name="copies_available" placeholder="total copies available" required>
    <button onclick="">Submit</button>
    
</form>

    <?php include "footer.php";?>


</body>
</html>