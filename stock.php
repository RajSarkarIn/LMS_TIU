<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookinsert.css">
    <title>Book Issue</title>
</head>

<body>
    <?php include "header.php"; ?>
    <h1 style="font-family:text1; text-align:center;">Book Stock</h1>
    <form action="stockdb.php" method="get" class="contbox" style="height:10rem;">
        <label for="book_id">Book ID:</label>
        <input type="text" name="book_id" placeholder="Enter Book Id" required>
        <button>Submit</button>
    </form>

    </form>


    <?php include "footer.php"; ?>

</body>

</html>