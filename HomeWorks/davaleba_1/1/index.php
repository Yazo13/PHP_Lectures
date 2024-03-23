<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="get">
        <input type="text" name="saxeli" placeholder="სახელი" required><br><br>
        <input type="text" name="gvari" placeholder="გვარი" required><br><br>
        <input type="text" name="tanamdeboba" placeholder="თანამდეგობა" required><br><br>
        <input type="number" name="xelfasi" placeholder="ხელფასი" required><br><br>
        <input type="number" name="procenti" placeholder="პროცენტი" required><br><br>
        <input type="submit" name="submit" value="submit"><br><br>

    </form>

    <?php 
            function prc($xelfasi, $procenti){
                $daklebuli = $xelfasi * ($procenti / 100);
                $daricxuli = $xelfasi - $daklebuli;
                return array($daklebuli, $daricxuli);
            }


            if(isset($_GET['submit'])){
                $saxeli = $_GET['saxeli'];
                $gvari = $_GET['gvari'];
                $tanamdeboba = $_GET['tanamdeboba'];
                $xelfasi = $_GET['xelfasi'];
                $procenti = $_GET['procenti'];
                
                list($daklebuli, $daricxuli) = prc($xelfasi, $procenti);
                echo "<table border = '2'>";
                echo "<tr><td>სახელი</td><td>$saxeli</td></tr>";
                echo "<tr><td>გვარი</td><td>$gvari</td></tr>";
                echo "<tr><td>თანამდეგობა</td><td>$tanamdeboba</td></tr>";
                echo "<tr><td>ხელფასი</td><td>$xelfasi</td></tr>";
                echo "<tr><td>პროცენტი</td><td>$procenti</td></tr>";
                echo "<tr><td>დაკლებული ხელფასი</td><td>$daklebuli</td></tr>";
                echo "<tr><td>დარიცხული ხელფასი</td><td>$daricxuli</td></tr>";
                echo "</table>";


            }
    ?>

</body>
</html>