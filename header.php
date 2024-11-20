<?php
// header.php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS here -->
</head>
<body>
    <header>
<nav>
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a onclick="document.getElementById('id01').style.display='inline-block'" style="width:auto; display:inline-block; margin-right: 15px;" name="Login" >Login</a></li>
                <li><a href="services.php" name="Services" >Services</a></li>
            </ul>
        </nav>

        
    </header>
</body>
</html>
