<?php 
    $nav_query = "SELECT * FROM Post";
    $nav_result = mysqli_query($conn, $nav_query);
    $navigation =  mysqli_fetch_all($nav_result);

    echo "<pre>";
    print_r($navigation);
    echo "</pre>";

