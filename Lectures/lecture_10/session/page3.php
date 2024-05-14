<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Page 3</title>
</head>
<body>
    <h1>Page 3</h1>
    <h3>
        <a href="page1.php">LINK</a>
    </h3>
    <div>
        <?php
            unset($_SESSION['s1']);
            echo $_SESSION['s1'];  
            echo "<hr>";
            echo $_SESSION['s2'];  
        ?>
    </div>
</body>
</html>