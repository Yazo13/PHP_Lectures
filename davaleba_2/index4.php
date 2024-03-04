<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davaleba 2_1</title>
</head>
<body>
    <?php
    // ასოციაციური მატრიცა: 
    $cars = array(
        array("Make"=>"Toyota", 
            "Model"=>"Corolla", 
            "Color"=>"White", 
            "Mileage"=>24000, 
            "Status"=>"Sold"),
    
        array("Make"=>"Toyota", 
            "Model"=>"Camry", 
            "Color"=>"Black", 
            "Mileage"=>56000, 
            "Status"=>"Available"),
    
        array("Make"=>"Honda", 
            "Model"=>"Accord", 
            "Color"=>"White", 
              "Mileage"=>15000, 
            "Status"=>"Sold")  );
    

        // მატრიცის დაბეჭდვა...
            echo "<table border='1'>";
                echo "<tr>";
                for ($i=0; $i < 5; $i++) { 

                    echo "<th>" . array_keys($cars[0])[$i] . "</th>";
                }
                echo "</tr>";

                for ($i = 0; $i < 3; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= 4; $j++) {
                    echo "<td>" . array_values($cars[$i])[$j] . "</td>";
                }
                echo "</tr>";
                }
            echo "</table>";


?>
</body>
</html>