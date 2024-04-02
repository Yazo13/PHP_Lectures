
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="?nav=dir">Folder, File</a></li>
            <li><a href="?nav=get_post_1">Get, Post - 1</a></li>
            <li><a href="?nav=get_post_2">Get, Post - 2</a></li>
            <li><a href="?nav=file_upload">File Upload</a></li>
        </ul>
    </nav>
    <div class="home">
    <?php
    if(isset($_GET['nav'])&& $_GET['nav'] == 'file_upload'){
        echo'<link rel="stylesheet" href="file_upload/style_upload.css">';
        include("file_upload/index_upload.php");}
        elseif (isset($_GET['nav'])&& $_GET['nav'] == 'dir'){
        echo'<link rel="stylesheet" href="dir/style.css">';
        include("dir/index.php");}
        elseif (isset($_GET['nav'])&& $_GET['nav'] == 'get_post_2'){
            echo'<link rel="stylesheet" href="get_post_2/style.css">';
            include("get_post_2/index.php");}
            elseif (isset($_GET['nav'])&& $_GET['nav'] == 'get_post_1'){
                echo'<link rel="stylesheet" href="get_post_1/style.css">';
                include("get_post_1/index.php");}
    ?>
    </div>
    
</body>
</html>