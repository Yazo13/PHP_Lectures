<?php
    include "array_of_questions.php";
    shuffle($questions);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="question"><h3> Questions </h3></div>
            <div><h3> Answers </h3></div>
            <div><h3> Grade </h3></div>
        </div>
        <form action="grade.php" method="post">
            <?php 
                foreach($questions as $key => $item):
            ?>
            <div class="row">
                <div class="question">
                    <input type="hidden" name="questions[<?=$key?>][question]" value="<?=$item['question']?>">
                    <?=$item['question']?>
                </div>
                <div><input type="text" placeholder="answer" name="questions[<?=$key?>][answer]"></div>
                <div><?=$item['grade']?></div>
            </div>
            <?php
                endforeach;
            ?>
            <div class="button">
                <label for="">Student:</label>
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Lastname" name="lastname">
                <button>SEND</button>
            </div>
        </form>
    </div>
</body>
</html>
