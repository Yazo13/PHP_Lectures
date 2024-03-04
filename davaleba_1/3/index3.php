<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>კითხვარი</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h3>ტესტები</h3>
        <p>1.რომელია საფრანგეთის დედაქალაქი?</p>
        <input type="radio" name="q1" value="1">პარიზი<br>
        <input type="radio" name="q1" value="2">ლონდონი<br>
        <input type="radio" name="q1" value="3">ბერლინი<br>
        <input type="radio" name="q1" value="4">რომი<br><br>

        <p>2. რომელია ყველაზე დიდი პლანეტა?</p>
        <input type="radio" name="q2" value="1">მერკური<br>
        <input type="radio" name="q2" value="2">ვენერა<br>
        <input type="radio" name="q2" value="3">დედამიწა<br>
        <input type="radio" name="q2" value="4">იუპიტერი<br><br>

        <p>3. ვინ დაწერა ვეფხისტყაოსანი?</p>
        <input type="radio" name="q3" value="1">ნოდარ დუმბაძე<br>
        <input type="radio" name="q3" value="2">ილია ჭავჭავაძე<br>
        <input type="radio" name="q3" value="3">იაკობ გოგებაშვილი<br>
        <input type="radio" name="q3" value="4">შოთა რუსთაველი<br><br>

        <h3>ღია კითხვები</h3>
        <p>4. რამდენი კუთხე აქვს სამკუთხედს ?</p>
        <input type="text" name="q4"><br><br>

        <p>5. ამოხსენი: 5 + 3 * 4 - 3</p>
        <input type="text" name="q5"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correct_answers = 0;

        // Check test questions
        if ($_POST['q1'] == '1') {
            $correct_answers++;
        }
        if ($_POST['q2'] == '4') {
            $correct_answers++;
        }
        if ($_POST['q3'] == '4') {
            $correct_answers++;
        }

        // Check open questions
        $q4_answer = strtolower(trim($_POST['q4']));
        if ($q4_answer == '3' || $q4_answer == 'სამი') {
            $correct_answers++;
        }

        $q5_answer = strtolower(trim($_POST['q5']));
        if ($q5_answer == '14' || $q5_answer == 'თოთხმეტი') {
            $correct_answers++;
        }

        echo "<h3>სწორი პასუხების რაოდენობა: $correct_answers/5 </h3>";
    }
    ?>
    
</body>
</html>