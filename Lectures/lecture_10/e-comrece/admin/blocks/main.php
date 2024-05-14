
<main>
    <nav>
        <ul>
            <li>
                <form action="" method="post">
                    <input type="hidden" name="logout" value="true">
                    <a href="?sign=out" name="button" type="submit" style="border:none; background:none; cursor:pointer;">Sign
                        out</a>
                        
                </form>
                <?php
                
                if (isset($_GET['sign']) && $_GET['sign'] == "out") {
                    $url = $_SERVER['PHP_SELF'];
                    session_destroy();
                    header("location: $url");
                }
                ?>
            </li>
            <li><a href="?add">Add Category</a></li>
            <h1>
                            <?php
                                echo "<br><br>";
                                echo $_SESSION['Username'];
                                echo "<hr>";
                                echo $_SESSION['Name'];

                            ?>
                        </h1>
        </ul>
    </nav>
    <div class="content">
        <?php
            if(isset($_GET['add'])){
                include "./blocks/addCategory.php";
            }
        ?>

    </div>
</main> 