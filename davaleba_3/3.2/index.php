<?php 
    include("info.php");
    include "validation.php";

    // Initialize variables to hold input values
    $nameValue = isset($_POST["name"]) ? $_POST["name"] : "";
    $lastnameValue = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $emailValue = isset($_POST["email"]) ? $_POST["email"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST["student_submit"]) && $nameErr == "" && $lastnameErr == "" && $emailErr == ""){
            include "manager.php";
        }else{
            include "student.php";
        }
    ?>
</body>
</html>
