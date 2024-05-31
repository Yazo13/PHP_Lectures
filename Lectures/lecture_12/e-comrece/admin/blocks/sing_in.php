<?php 
    if(isset($_POST['singin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = "SELECT Name, Username, role FROM user WHERE Email = '$email' and Password = '$password'";
        $user_res = mysqli_query($conn, $user);
        if(mysqli_num_rows($user_res) == 1){
            $row = mysqli_fetch_assoc($user_res);
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";

            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Name'] = $row['Name'];

            $admin_url = explode("/", $_SERVER['PHP_SELF']);
            array_pop($admin_url);
            array_shift($admin_url);
            $admin_url = "/".implode("/",$admin_url)."/admin";
            if($row['role'] == 1) header("location: $admin_url");
            else {
                $admin_url = explode("/", $_SERVER['PHP_SELF']);
                array_pop($admin_url);
                array_shift($admin_url);
                $admin_url = "/".implode("/",$admin_url);
                
                header("location: $admin_url");
            }
        }

        // echo "<pre>";
        // print_r($user_res);
        // echo "</pre>";
        
    }