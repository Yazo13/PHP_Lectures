<main>
    <nav>
        <ul>
            <li>
                <form action="" method="post">
                    <input type="hidden" name="logout" value="true">
                    <button name="button" type="submit" style="border:none; background:none; cursor:pointer;">Sign
                        out</button>
                </form>
                <?php
                if (isset($_POST['button'])) {
                    unset($_SESSION['Username']);
                    unset($_SESSION['Name']);
                }
                ?>
            </li>
            <li><a href="">Add Category</a></li>
        </ul>
    </nav>
    <div class="content"></div>
</main>