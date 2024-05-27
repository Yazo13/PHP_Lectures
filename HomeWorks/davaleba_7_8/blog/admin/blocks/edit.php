
<?php
    $id = $_GET['edit'];
    $edit_result = mysqli_query($conn, "Select * from post Where ID = '$id'");
    $edit_record = mysqli_fetch_assoc($edit_result);
?>

<form method="post" style="padding: 20px">
    <label for="title">Title</label>
    <input name="title" type="text" value="<?= $edit_record['Title'] ?>">
    <br><br>
    <label for="description">Description</label>
    <textarea name="description" rows="5" cols="40"><?= $edit_record['Content'] ?></textarea>
    <br><br>
    <button type="submit" name="submit">Submit</button>
</form>

