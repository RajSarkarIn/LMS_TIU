<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookinsert.css">
    <title>Remove User</title>
</head>

<body>
    <?php include "header.php"; ?>
    <h1 style="font-family:text1; text-align:center;">Reset Password</h1>
    <form method="get" class="contbox" action="passwordresetdb.php" style="height:9.5rem;">
        <label for="ID">Enter ID</label>
        <input type="text" name="ID" placeholder="Enter ID" required>
        <label for="newpass">Enter New Password</label>
        <input type="password" name="newpass" placeholder="Enter New Password" required>
        <button type="submit">Submit</button>

    </form>

    <?php include "footer.php"; ?>


</body>

</html>