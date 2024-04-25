<?php
    $query = "SELECT * FROM Student";
    $res = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($res);

    echo "<pre>";
    print_r($result);
    echo "</pre>";