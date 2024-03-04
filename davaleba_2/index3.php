<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davaleba 2_1</title>
</head>
<body>
    <?php
    // 6 5ზე მატრიცა
    $matrix = [
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0]
    ];

    for ($i=0; $i <= 5; $i++) { 
        for ($j=0; $j <= 4; $j++) { 
            $matrix[$i][$j] = $i + $j;
        }
    }
    echo "<h2>Matrix:</h2>";
    echo "<table border='1'>";
    for ($i = 0; $i <= 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 4; $j++) {
            echo "<td>" . $matrix[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>