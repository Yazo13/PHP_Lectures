<form method="post" style="padding: 20px">
    <label for="title">Title</label>
    <input name="title" type="text">
    <br><br>
    <label for="description">Description</label>
    <textarea name="description" rows="5" cols="40"></textarea>
    <br><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php

if(isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['description']) && !empty($_POST['title']) && !empty($_POST['description'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $q = "INSERT INTO categorys (title, description) VALUES ('$title', '$desc')";
    $result = mysqli_query($conn, $q);
    if ($result) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($conn);
    }

    // $nav_q = "SELECT * FROM categorys";
    // $nav_result = mysqli_query($conn, $nav_q);
    // $navigation = mysqli_fetch_all($nav_result);

    // echo "<pre>";
    // print_r($navigation);
    // echo "</pre>";
}

?>

