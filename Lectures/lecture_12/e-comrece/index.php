<?php
    session_start();
    include_once "config/conn.php";
    include_once "./admin/blocks/sing_in.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>Header!
        <div class="sing">
            <div><a href="?sing=in">Sing In</a></div>
            <div><a href="">Sing Up</a></div>
        </div>
    </header>
    <?php
    include "blocks/nav.php"
        ?>
    <main>
        <?php 
            if(isset($_GET['sing']) && $_GET['sing'] == "in"){
                include "./admin/blocks/loginform.php";
            }
            
        ?>
    </main>
    <footer>Footer</footer>
</body>

</html>