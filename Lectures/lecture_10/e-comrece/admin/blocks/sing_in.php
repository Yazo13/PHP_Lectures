<?php 
    if(isset($_POST['singin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = "SELECT Name, Username FROM user WHERE Email = '$email' and Password = '$password'";
        $user_res = mysqli_query($conn, $user);
        if(mysqli_num_rows($user_res) == 1){
            $row = mysqli_fetch_assoc($user_res);
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";

            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Name'] = $row['Name'];

        }

        // echo "<pre>";
        // print_r($user_res);
        // echo "</pre>";
        
    }