    <?php 
        $err1 = "";
        $err2 = "";
        include("drive.php");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Drive</title>
    </head>
    <body>
        <header>
            <div>
                <form method="post">
                    <input type="text" name="folder_name" placeholder="Folder Name"> - <button class='sybmit' type="submit">Create Folder</button>
                    <span><?=$err1?></span>
                </form>
            </div>
            <div>
                <form method="post">
                    <input type="text" name="file_name" placeholder="File Name"> - <button class='sybmit' type="submit">Create File</button>
                    <span><?=$err2?></span>
                </form>
            </div>
        </header>
        <Main>
        <h2>Contents of Root Directory:</h2>
        <ul>
            <?php
            $root_contents = scandir("dir/root");
            foreach ($root_contents as $item) {
                if ($item != "." && $item != "..") {
                    if (pathinfo($item, PATHINFO_EXTENSION) === 'txt') {
                        echo "<li>$item - ";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='read_file' value='$item'>";
                        echo "<button class='read' type='submit'>Read</button>";
                        echo "</form>";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='modify_file' value='$item'>";
                        echo "<input class='input' type='text' name='new_content' placeholder='Enter new content...'>";
                        echo "<button class='modify' type='submit'>Modify</button>";
                        echo "</form>";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='old_file_name' value='$item'>";
                        echo "<input class='input' type='text' name='new_file_name' placeholder='Enter new file name...'>";
                        echo "<button class='rename' type='submit' name='rename_file'>Rename</button>";
                        echo "</form>";
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='delete_file' value='$item'>";
                        echo "<button class='delete' type='submit'>Delete</button>";
                        echo "</form>";
                        echo "</li>";
                    } else {
                        echo "<li>$item - ";
                        //Rename
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='old_folder_name' value='$item'>";
                        echo "<input class='input' type='text' name='new_folder_name' placeholder='Enter new folder name...'>";
                        echo "<button class='rename' type='submit' name='rename_folder'>Rename</button>";
                        echo "</form>";
                        //ADD FILE
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='add_file' value='$item'>";
                        echo "<input class='input' type='text' name='new_file_name' placeholder='Enter new file name...'>";
                        echo "<button class='addFile' type='submit'>Add File</button>";
                        echo "</form>";
                        //READ DIR
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='read_folder' value='$item'>";
                        echo "<button class='read' type='submit'>Read DIR</button>";
                        echo "</form>";
                        //DELETE
                        echo "<form method='post'>";
                        echo "<input type='hidden' name='delete_folder' value='$item'>";
                        echo "<button class='delete' type='submit'>Delete</button>";
                        echo "</form>";
                        echo "</li>";
                    }
                }
            }
            ?>
        </ul>
        <?php
        if (!empty($file_contents)) {
            echo "<h3>File Contents:</h3>";
            echo "<pre>$file_contents</pre>";
        }
        ?>
        <?php
        if (!empty($folder_contents)) {
            echo "<h3>Folder Contents:</h3>";
            foreach ($folder_contents as $item) {
                if($item != "." && $item != ".."){
                    echo "<pre>$item</pre>";
                } 
            }
            
        }
        ?>
    </Main>


        
    </body>
    </html>