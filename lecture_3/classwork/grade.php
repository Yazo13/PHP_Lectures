<?php
include "questions.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answers = $_POST['answer'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    echo "<h1 class='name'>".$name." ".$username."</h1><br>";
    
}
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
    <div class="container">
        <div class="row Heading">
            <div><h3>Questions</h3></div>
            <div><h3>Answers</h3></div>
            <div><h3>Grade</h3></div>
            <div><h3>Lecturer Answer</h3></div>
        </div>
        <form action="grade1.php" method="post">
        <?php 
        for ($i=0; $i < 5; $i++) {         
        echo "<div class='row'>
        <div class='question' >{$questions[$i]['questions']}</div>
        <div>{$answers[$i]}</div>
        <div class='question' >{$questions[$i]['Grade']}</div>
        <input type='text' name='grade1[]' placeholder='grade'>
        </div>";
        }
        ?>

        <div class="button">
            lecturer
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="username" placeholder="Username">
            <button>Send</button>
        </div>
        </form>
    </div>
    
</body>
</html>