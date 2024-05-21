<?php
    include "upload_file.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
            <form method="post" enctype="multipart/form-data">
                <div>
                    <input type="file" name="f_name">
                </div>
                <div>
                    <input type="submit" value="Upload File" name="upload_file">
                </div>
            </form>
            <hr>
        </div>
    </header>
    <?php
        include ("main.php");
    ?>
</body>
</html>