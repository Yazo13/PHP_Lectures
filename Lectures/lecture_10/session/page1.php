<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1</h1>
    <h3>
        <a href="page2.php">LINK</a>
    </h3>
    <div>
        <?php
            $p1 = "This is a Page 1";
            $_SESSION['s1'] = $p1;
            echo $_SESSION['s1'];   


            $_SESSION['s2'] = "Session s2";
            echo "<hr>";
            echo $_SESSION['s2'];   

            ?>
    </div>
</body>
</html>