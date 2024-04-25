<?php 
    $nav_q = "SELECT * FROM products";
    $nav_result = mysqli_query($conn, $nav_q);
    $navigation = mysqli_fetch_all($nav_result);


    echo "<pre>";
    print_r($navigation);
    echo "</pre>";


?>

<nav>
    <ul>
        <li><a href="">Menu1</a></li>
        <li><a href="">Menu2</a></li>
        <li><a href="">Menu3</a></li>
    </ul>
</nav>