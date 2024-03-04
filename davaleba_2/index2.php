<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davaleba 2_1</title>
</head>
<body>
    <?php
    // ოთხი ოთხზე მატრიცა
    $matrix = [
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0]
    ];

    // რენდომ ელემენტები
    for ($i = 0; $i <= 3; $i++) {
        for ($j = 0; $j <= 3; $j++) {
            $matrix[$i][$j] = rand(10, 100);
        }
    }

    // მატრიცის დაბეჭდვა
        echo "<h2>Matrix:</h2>";
        echo "<table border='1'>";
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 4; $j++) {
                echo "<td>" . $matrix[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";



    echo "<br><form method='post'>";
    echo "Enter Number X: <input type='number' name='X'><br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";

    // X რიცხვის ჯერადების გამოტანა
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $X = $_POST['X'];
        echo "<h2>Multiples of $X in the matrix:</h2>";
        echo "<table border='1'>";
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 4; $j++) {
                if ($matrix[$i][$j] % $X == 0) {
                    echo "<td>" . $matrix[$i][$j] . "</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";

        // ელემენტების ჯამი და ნამრავლი
        $sum = 0;
        $product = 1;
        foreach ($matrix as $row) {
            foreach ($row as $element) {
                $sum += $element;
                $product *= $element;
            }
        }
        $mean = $sum / 16;
        echo "<h2>Matrix Statistics:</h2>";
        echo "Sum: $sum<br>";
        echo "Product: $product<br>";
        echo "Arithmetic Mean: $mean<br>";
        // თიოეული რიცხვის ციფრების ჯამი ცხრილში
        echo "<h2>Sum of Digits:</h2>";
        echo "<table border='1'>";
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 4; $j++) {
                $digits = str_split($matrix[$i][$j]);
                $digit_sum = array_sum($digits);
                echo "<td>$digit_sum</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>