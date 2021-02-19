<?php

    $emptyErrMsg = "Please enter a value for the field";
    $nameReg="/^[A-Za-z\s'-]+$/i";
    $cityReg = "/^[A-Za-z\s-]+$/i";
    $emailReg = "/[\w-]+@([\w-]+\.)+[\w-]+/";

    $displayForm= TRUE;
    $displayTable = false;
    
    $fNameValid= true;
    $lNameValid = true;
    $emailValid = true;
    $cityValid = true;
    $countryValid = true;
    $passwordValid = true;
    $confirmPasswordValid= true;

    $fNameErrMsg = $emptyErrMsg;
    $lNameErrMsg = $emptyErrMsg;
    $emailErrMsg = $emptyErrMsg;
    $cityErrMsg = $emptyErrMsg;
    $countryErrMsg = $emptyErrMsg;
    $passwordErrMsg = $emptyErrMsg;

    if (isset($_POST["newPlayerSub"])){
        
        $fName = $_POST["firstName"];
        $lName = $_POST["lastName"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $country = $_POST["country"];
        $professional = $_POST["professional"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];



        if (trim($fName) === ""){
            $fNameValid = false;
        }else if (!preg_match($nameReg, $fName)){
            $fNameValid = false;
            $fNameErrMsg = "First name can only contain letters, dash, apostraphe or spaces";
        }else{
            $fNameValid = true; 
        }
        
        if (trim($lName) === ""){
            $lNameValid = false;
        }else if (!preg_match($nameReg, $fName)){
            $lNameValid = false;
            $lNameErrMsg = "Last name can only contain letters, dashes, apostraphes or spaces";
        }else{
            $lNameValid = true; 
        }

        if (trim($email) === ""){
            $emailValid = false;
        }else if (!preg_match($emailReg, $email)){
            $emailValid = false;
            $emailErrMsg = "Email format is not correct";
        }else{
            $emailValid = true; 
        }

        if (trim($city) === ""){
            $cityValid = false;
        }else if (!preg_match($cityReg, $city)){
            $cityValid = false;
            $cityErrMsg = "City can only contain letters, dashes or spaces";
        }else{
            $cityValid = true; 
        }

        if (trim($password) === "" || trim($confirmPassword) == ""){
            $passwordValid = false;
        }else if ($password !== $confirmPassword){
            $passwordValid = false;
            $passwordErrMsg = "Passwords do not match";
        }else{
            $passwordValid = true; 
        }

        if (!$passwordValid || !$fNameValid || !$lNameValid || !$emailValid || !$cityValid || !$passwordValid ){
            $displayForm = true;
        }else{
            $displayForm = false;
        }

    }

?>