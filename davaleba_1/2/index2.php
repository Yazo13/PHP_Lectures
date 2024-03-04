<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-spacing: 10px;
            border: 2px solid black;
        }
        .td {
            background-color: lightblue;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form method='POST'>
    <input type="text" name="saxeli" placeholder="სახელი" required><br><br>
        <input type="text" name="gvari" placeholder="გვარი" required><br><br>
        <input type="number" name="kursi" placeholder="კურსი" required><br><br>
        <input type="number" name="semestri" placeholder="სემესტრი" required><br><br>
        <input type="text" name="kursi_das" placeholder="კურსის დასახელება" required><br><br>
        <input type="number" name="nishani" placeholder="ნიშანი" required><br><br>
        <input type="text" name="leqtoris_saxeli" placeholder="ლექტორის სახელი" required><br><br>
        <input type="text" name="leqtoris_gvari" placeholder="ლექტორის გვარი" required><br><br>
        <input type="text" name="dekanis_saxeli" placeholder="დეკანის სახელი" required><br><br>
        <input type="text" name="dekanis_gvari" placeholder="დეკანის გვარი" required><br><br>

        <input type="submit" name="submit" value="submit"><br><br>
    </form>

    <?php 
       function shefaseba($qula) {
        
        if ($qula > 0 && $qula <= 100) {
            if ($qula <= 100 && $qula >= 91) {
                return "A";
            }
            elseif ($qula < 91 && $qula >= 81) {
                return "B";
            }
            elseif ($qula < 81 && $qula >= 71) {
                return "C";
            }
            elseif ($qula < 71 && $qula >= 61) {
                return "D";
            }
            elseif ($qula < 61 && $qula >= 51) {
                return "E";
            }
            elseif ($qula < 51) {
                return "Chaichra";
            }
        }
    }
    


        if(isset($_POST['submit'])){
            $saxeli = $_POST['saxeli'];
            $gvari = $_POST['gvari'];
            $kursi = $_POST['kursi'];
            $semestri = $_POST['semestri'];
            $kursi_das = $_POST['kursi_das'];
            $nishani = $_POST['nishani'];
            $leqtoris_saxeli = $_POST['leqtoris_saxeli'];
            $leqtoris_gvari = $_POST['leqtoris_gvari'];
            $dekanis_saxeli = $_POST['dekanis_saxeli'];
            $dekanis_gvari = $_POST['dekanis_gvari'];

            $shefaseba = shefaseba($nishani);
            
            echo "<table>";
            echo "<tr><td>სახელი</td><td class='td'>$saxeli</td></tr>";
            echo "<tr><td>გვარი</td><td class='td'>$gvari</td></tr>";
            echo "<tr><td>კურსი</td><td class='td'>$kursi</td></tr>";
            echo "<tr><td>სემესტრი</td><td class='td'>$semestri</td></tr>";
            echo "<tr><td>კურსის დასახელება</td><td class='td'>$kursi_das</td></tr>";
            echo "<tr><td>ნიშანი</td><td class='td'>$nishani</td></tr>";
            echo "<tr><td>შეფასება</td><td class='td'>$shefaseba</td></tr>";
            echo "<tr><td>ლექტორის სახელი</td><td class='td'>$leqtoris_saxeli</td></tr>";
            echo "<tr><td>ლექტორის გვარი</td><td class='td'>$leqtoris_gvari</td></tr>";
            echo "</table>";


        }
    ?>
</body>
</html>