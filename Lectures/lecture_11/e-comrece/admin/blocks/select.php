<?php

    $nav_q = "SELECT * FROM categorys";
    $nav_result = mysqli_query($conn, $nav_q);
    
    // echo "<pre>";
    // print_r($navigation);
    // echo "</pre>";
    
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $nav_q = "DELETE FROM categorys Where categorys_id = $id";
        mysqli_query($conn, $nav_q);
        header("Location: ". $_SERVER['PHP_SELF']);
    };
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $title = $_GET['title'];
        $desc = $_GET['desctiption'];
        $query = "UPDATE categorys set title = '$title' & description = $desc ";
    }
    
?>

<h1 style="margin-top: 20px; font-size: 2em; padding: 10px;">Categorys</h1>
<div>
    <table style="background-color: white; padding: 25px; width: 100%">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        
        <?php
            while($navigation = mysqli_fetch_assoc($nav_result)){
        ?>
        <tr>
            <td style="padding: 10px; border: 1px dotted black;"><?= $navigation['categorys_id'] ?></td>
            <td style="padding: 10px; border: 1px dotted black;"><?= $navigation['title'] ?></td>
            <td style="padding: 10px; border: 1px dotted black;"><?= $navigation['description'] ?></td>
            <td style="padding: 10px; border: 1px dotted black;"><?= $navigation['created_at'] ?></td>
            <td style="padding: 10px; border: 1px dotted black;"><a href="?edit=<?= $navigation['categorys_id']?>">Edit</a></td>
            <td style="padding: 10px; border: 1px dotted black;"><a href="?delete=<?= $navigation['categorys_id']?>">Delete</a></td>
        </tr>
                <?php } ?>

        
    </table>
</div>
