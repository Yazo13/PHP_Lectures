<?php 
    session_start();
    include_once "../config/conn.php"; 
    include "./blocks/sing_in.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
    
?>
<body>
    <?php
        if(!isset($_SESSION['Username'])){
            include "./blocks/loginform.php";
        }else{
            include "./blocks/main.php";
        }
    ?>
</body>

</html>