<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $answers = $_POST['grade1'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        echo "<h1 class='name'>".$name." ".$username."</h1><br>";
        for ($i=0; $i < 5; $i++) { 
            echo $answers[$i]. "<br>";
        }
    }
?>

