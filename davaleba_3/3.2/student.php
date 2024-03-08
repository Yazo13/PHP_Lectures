<form method="post">
    <div class="parent">
        <input class="inp" type="text" name="name" placeholder="Name" value="<?= htmlspecialchars($nameValue) ?>"><br><br>
        <span class="error"><?= $nameErr ?></span>
    </div>
    <div class="parent">
        <input class="inp" type="text" name="lastname" placeholder="Lastname" value="<?= htmlspecialchars($lastnameValue) ?>"><br><br>
        <span class="error"><?= $lastnameErr ?></span>
    </div>
    <div class="parent">
        <input class="inp" type="text" name="email" placeholder="Email" value="<?= htmlspecialchars($emailValue) ?>"><br><br>
        <span class="error"><?= $emailErr ?></span>
    </div>
    <div>
        <label for="">Subjects</label>
        <?php 
        foreach ($subject as $_subject) {
        ?>
        <div>
            <input type="checkbox" name="subject[]" value="<?=$_subject['subject']?>"> -  <label for=""><?= $_subject['subject']." ". $_subject['Cr'] ?> </label>
        </div>
        <?php 
        }
        ?>
    </div>
    <div style="display: flex; justify-content: center;">
        <input type="submit" name="student_submit" value="Registration" class="button">
    </div>
</form>
