<?php 
$nameErr = $emailErr = $lastnameErr= "";
    // Name validation
    if (isset($_POST["name"]) && empty($_POST["name"])) {
        $nameErr = "Name is required";
    } 
    if (isset($_POST["lastname"]) && empty($_POST["lastname"])) {
        $lastnameErr = "LastName is required";
     }

    // Email validation
    if (isset($_POST["email"]) && empty($_POST["email"])) {
        $emailErr = "Email is required";
    }
