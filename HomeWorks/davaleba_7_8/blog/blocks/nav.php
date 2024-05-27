<?php 
    $nav_q = "SELECT * FROM post";
    $nav_result = mysqli_query($conn, $nav_q);
    $navigation = mysqli_fetch_all($nav_result);

    // echo "<pre>";
    // print_r($navigation);
    // echo "</pre>";


?>

<nav>
    <ul>
        <?php foreach ($navigation as $item) {
        ?>
        <li><a href=""><?= $item[1] ?></a></li>
        <?php } ?>
    </ul>
</nav>