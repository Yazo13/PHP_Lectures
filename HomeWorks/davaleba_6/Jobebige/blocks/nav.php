<?php
    $query = "SELECT * FROM Post";
    $query_res = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($query_res);

    echo "<pre>";
    print_r($result);
    echo "</pre>";