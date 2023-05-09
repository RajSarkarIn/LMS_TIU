<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a14cd5396.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="header.css">
    <title>Header</title>
</head>
<body>
    <div style="text-align:center; font-family:text2; font-size:1.2rem;">Hello <i class="fa-regular fa-handshake fa-shake"></i> <?php echo $_SESSION['username'];?></div>
    <div class="details">
        <div class="home"><a href="dashboardadmin.php"><i class="fa-solid fa-house"></i> Home</a></div>
        <div style="text-decoration:underline;"><i class="fa-regular fa-calendar"></i> <?php echo date("d.M.Y");?></div>
        <div class="logout"><a href="logout.php">Logout <i class="fa-solid fa-right-from-bracket"></i></a></div>
    </div>
</body>
</html>