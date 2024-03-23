<?php
    include "array_of_questions.php";
    // echo "<pre>";
    // echo print_r($_POST);
    // echo "</pre>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1><?=$_POST['name']." ".$_POST['lastname']?></h1>
        </div>
        <div class="row">
            <div class="question"><h3> Questions </h3></div>
            <div class="answer"><h3> Answers </h3></div>
            <div class="max-point"><h3> Max Point </h3></div>
            <div class="grade"><h3> Grade </h3></div>
        </div>
        <form action="grade.php" method="post">
            <?php
                foreach($_POST['questions'] as $key => $question_data):
                    $question = $question_data['question'];
                    $grade = $questions[$key]['grade'];
                    $answer = isset($question_data['answer']) ? $question_data['answer'] : ''; 
            ?>
            <div class="row">
                <div class="question"><?=$question?></div>
                <div class="answer"><?=$answer?></div>
                <div class="max-point"><?=$grade?></div>
                <div class="grade"><input type="text"></div>
            </div>
            <?php
                endforeach;
            ?>
            <div class="button">
                <label for="">Lecturer:</label>
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Lastname" name="lastname">
                <button>SEND</button>
            </div>
        </form>
    </div>
</body>
</html>