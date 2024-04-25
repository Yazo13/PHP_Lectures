<main>
    <?php
    if (isset($_GET['ren'])) {
        include "rename.php";
    }
    $drive = scandir("drive");
    ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Download</th>
                <th>Reaname</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 2; $i < count($drive); $i++) {
                ?>
                <tr>
                    <td>
                        <?= $drive[$i] ?>
                    </td>
                    <td><a href="drive/<?= $drive[$i] ?>" Download>Download</a></td>
                    <td><a href="?ren=<?= $drive[$i] ?>">Rename</a></td>
                    <td><a href="?del=<?= $drive[$i] ?>">Delete</a></td>
                </tr>


                <!-- <?php
                $directory = "drive/";

                $files = scandir($directory);

                foreach ($files as $file) {
                    if (is_file($directory . '/' . $file)) {
                        $fileInfo = pathinfo($file);
                        $extension = strtolower($fileInfo['extension']);
                        if ($extension === 'pdf') {
                            echo '<iframe src="' . $directory . '/' . $file . '" width="100%" height="500px"></iframe>';
                        }
                    }
                }
                ?> -->
            <?php } ?>
        </tbody>
    </table>
</main>