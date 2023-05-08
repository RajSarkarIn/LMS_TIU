<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a14cd5396.js" crossorigin="anonymous"></script>
    <title>LMS_Techno India University("Project")</title>
</head>
<body>
    <header>
        <img src="images/techno-indiauniversity-logo-black.png" alt="logo">
        <p>Library management System</p>
    </header>
<div class="adminlogin">
    <form action="adminlogin.php" method="post">
        <h3 style="text-decoration:underline; font-size:30px; font-weight:bold; font-family:text1;">Admin login</h3>
        <label for="username">Username <i class="fa-solid fa-user"></i></label>
        <input type="text" name="username" placeholder="Enter UserName" required>
        <label for="password">Password <i class="fa-solid fa-key"></i></label>
        <input type="password" name="Password" placeholder="Enter Password" required>
        <button onclick="submit.php">Login</button>
</form>

</div>
<div style="float:right;font-weight:600; text-align:center; margin-right:4px;">
<?php echo "Your IP is logged for security Reason<br> ".$_SERVER["REMOTE_ADDR"];    ?>
</div>
<?php include "footer.php"; ?>
</body>
</html>
