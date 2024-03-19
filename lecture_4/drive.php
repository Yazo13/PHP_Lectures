<?php
$err1 = "";

if(isset($_POST["folder_name"])){
    $url = "root/".$_POST["folder_name"];
    if(!empty($_POST["folder_name"]) && !is_dir($url)){

    mkdir($url);
    }else{
        $err1 = "დირექტორია ან უკვე არსებობს ან სახელი არ არის შეტანილი!";
    }
}
$err2 = "";

if(isset($_POST["file_name"])){
    $file_name = "root/".$_POST["file_name"].".txt";
    if(!empty($_POST["file_name"]) && !is_file($file_name)){

        
        fopen($file_name,'w');
    }else{
        $err2 = "ფაილი ან უკვე არსებობს ან სახელი არ არის შეტანილი!";
    }
}

$file_contents = ""; // Variable to store file contents
if(isset($_POST["read_file"])){
    $file_to_read = $_POST["read_file"];
    $file_path = "root/".$file_to_read;
    if(file_exists($file_path) && is_file($file_path) && pathinfo($file_path, PATHINFO_EXTENSION) === 'txt'){
        $file_contents = file_get_contents($file_path);
    }
}
if(isset($_POST["modify_file"])){
    $file_to_modify = $_POST["modify_file"];
    $new_content = $_POST["new_content"];
    $file_path = "root/".$file_to_modify;
    if(file_exists($file_path) && is_file($file_path) && pathinfo($file_path, PATHINFO_EXTENSION) === 'txt'){
        file_put_contents($file_path, $new_content);
        $success_message = "File content modified successfully!";
    }
}

if(isset($_POST["rename_folder"])){
    $old_folder_name = $_POST["old_folder_name"];
    $new_folder_name = $_POST["new_folder_name"];
    $old_url = "root/".$old_folder_name;
    $new_url = "root/".$new_folder_name;
    if(!empty($old_folder_name) && !empty($new_folder_name) && is_dir($old_url) && !is_dir($new_url)){
        rename($old_url, $new_url);
        $success_message = "Folder renamed successfully!";
    }else{
        $err1 = "Invalid operation!";
    }
}

if(isset($_POST["rename_file"])){
    $old_file_name = $_POST["old_file_name"];
    $new_file_name = $_POST["new_file_name"];
    $old_file_path = "root/".$old_file_name;
    $new_file_path = "root/".$new_file_name.".txt";
    if(!empty($old_file_name) && !empty($new_file_name) && is_file($old_file_path) && !file_exists($new_file_path)){
        rename($old_file_path, $new_file_path);
        $success_message = "File renamed successfully!";
    }else{
        $err2 = "Invalid operation!";
    }
}

if(isset($_POST["delete_folder"])){
    $folder_to_delete = $_POST["delete_folder"];
    $folder_path = "root/".$folder_to_delete;
    if(is_dir($folder_path)){
        // Use recursive deletion to delete folder and its contents
        if (rmdir($folder_path)) {
            $success_message = "Folder deleted successfully!";
        } else {
            $err1 = "Failed to delete folder!";
        }
    } else {
        $err1 = "Folder doesn't exist!";
    }
}

if(isset($_POST["delete_file"])){
    $file_to_delete = $_POST["delete_file"];
    $file_path = "root/".$file_to_delete;
    if(is_file($file_path)){
        if (unlink($file_path)) {
            $success_message = "File deleted successfully!";
        } else {
            $err2 = "Failed to delete file!";
        }
    } else {
        $err2 = "File doesn't exist!";
    }
}