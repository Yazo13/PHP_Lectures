<?php
    include "File_upload.php";   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <form method="post" enctype="multipart/form-data">
                <div>
                    <input type="file" name="file_name">
                </div>
                <div>
                    <input type="submit" value="Upload File" name="upload_file">
                </div>
            </form>
            <hr>
        </div>
    </header>
    <?php 
        include("main.php");
    ?>
</body>
</html>