<?php
     if(isset($_POST['upload_file'])){
        //   echo "<pre>";
        //   print_r($_FILES);
        //   echo "</pre>";
          $patch = "drive/".$_FILES['file_name']['name'];
          move_uploaded_file($_FILES['file_name']['tmp_name'], $patch);
       }
  
       if(isset($_GET['del'])){
          $patch = "drive/".$_GET['del'];
          unlink($patch);
          header("location: index.php");
       }
  
  
       if(isset($_POST['rename'])){
         $old_patch = "drive/".$_GET['ren'];
      //    echo "<pre>";
      //    echo $old_patch;
      //    print_r(pathinfo($old_patch));
      //    echo "</pre>";
         $new_patch = 'drive/'.$_POST['new_name'].".".pathinfo($old_patch)['extension'];
         rename($old_patch, $new_patch);
         header("location: index.php");
       }
  