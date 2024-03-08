<?php 
$nameErr = $emailErr = $lastnameErr= "";
    // Name validation
    if (isset($_POST["name"]) && empty($_POST["name"])) {
        $nameErr = "Name is required";
    } 
    if (isset($_POST["lastname"]) && empty($_POST["lastname"])) {
        $lastnameErr = "LastName is required";
     }

     function validateEmail($email) {
        // Check if the email is not empty
        if (empty($email)) {
            return false;
        }
    
        // Check if the email has a valid format
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
            return false;
        }
    
        return true;
    }
   if (isset($_POST["email"])) {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!validateEmail($_POST["email"])) {
        $emailErr = "Invalid email format";
    }
}

