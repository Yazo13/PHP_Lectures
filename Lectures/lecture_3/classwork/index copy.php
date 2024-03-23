<?php 
    include "questions.php" ;
    $indices = range(0, count($questions) - 1);
    shuffle($indices);
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
        </div>
        <form action="grade.php" method="post">
        <?php 
       foreach ($indices as $index) {         
        echo "<div class='row'>
        <div class='question'>{$questions[$index]['questions']}
        </div>
        <input type='text' name='answer[$index]' placeholder='answer'>
        <div>{$questions[$index]['Grade']}</div>
        </div>";
    }
        ?>

        <div class="button">
            Student
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="username" placeholder="Username">
            <button>Send</button>
        </div>
        </form>
    </div>
    
</body>
</html>