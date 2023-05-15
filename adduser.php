<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookinsert.css">
    <title>Add User To DataBase</title>
</head>
<body>
    <?php include"header.php";?>
<h1 style="font-family:text1; text-align:center;">Create a New User</h1>
<form  method="get" class="contbox" action="adduserdb.php" style="height:21.5rem;">    
    <label for="ID">Enter ID</label>
    <input type="text" name="ID" placeholder="Enter ID" required>
    <label for="name">Enter User Name</label>
    <input type="text" name="name" placeholder="Enter User Name" required>
    <label for="address">Enter Address</label>
    <textarea name="address" placeholder="Enter address"></textarea>
    <label for="contact_details">Enter contact details</label>
    <input type="text" name="contact_details" placeholder="Enter Contact Details" required>
    <label for="passowrd">Enter Password</label>
    <input type="password" name="password" required>
    <button type="submit">Submit</button>

    
</form>

    <?php include "footer.php";?>
</body>
</html>