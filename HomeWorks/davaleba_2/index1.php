<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davaleba 2_1</title>
</head>
<body>
    
    <form method="post">

        <label for="num">Enter X numer:</label>
        <input type="number" name="num">
        <button type="submit">Submit</button>

    </form>


    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr = [];
            for ($i = 0; $i < 12; $i++) {
                $arr[] = rand(10, 100);
            }
            $X = $_POST['num'];
            $count_above = 0;

            foreach ($arr as $element) {
                if ($element > $X) {
                    $count_above++;
                }
            }

            echo "Number of elements which is grater than $X is $count_above"." out of 12 numbers";

            echo "<br>"."Array: ";
            foreach ($arr as $number) {
                echo $number." ";
            }
        }
    ?>

</body>
</html>