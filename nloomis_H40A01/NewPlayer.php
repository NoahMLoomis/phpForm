<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          rel="stylesheet" crossorigin="anonymous"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh">
    <link href="styles/style.css" type="text/css" rel="stylesheet"/>
    <title>Intro</title>

</head>
<body>

<?php

    // require "PlayerFunctions.php";
    $emptyErrMsg = "Please enter a value for the field";

    $nameReg = "/[A-Za-z]/";
    $cityReg = "/[A-Za-z]/";
    // $emailReg = "/^\w+[\w-.]*@\w+(-\w+)|(\w*)\.(com|org|ca)$/";
    $emailReg = "/[A-Za-z]/";

    $displayForm= TRUE;

    
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
        //Else it is valid???
        
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
        }else if (!preg_match($cityReg, $email)){
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

    if ($displayForm){

?>

    
    
    <form action="NewPlayer.php" method="post" name="newPlayerForm" id="newPlayerForm">
    <h1>Add a new player</h1>
        <p id="errorFirstName" class="error">
            <?php 
            echo ($fNameValid ?  "" : $fNameErrMsg);
            ?>
        </p>
        <label for="firstName" id="fName" class="label">First Name: </label>
        <input type="text" id="firstName" name="firstName" value="<?php echo $fName ?>"
        class="<?php
            echo ($fNameValid ?  "" : "errorInput");
            ?>"
        /><br/>



        <p id="errorLastName" class="error">
            <?php 
            echo ($lNameValid ?  "" : $lNameErrMsg);
            ?>
        </p>
        <label for="lastName" id="lName" class="label">Last Name: </label>
        <input type="text" id="lastName" name="lastName" value="<?php echo $lName ?>" class="<?php 
            echo ($lNameValid ?  "" : "errorInput");
            ?>"/><br/>





        <p id="errorEmail" class="error">
            <?php 
            echo ($emailValid ?  "" : $emailErrMsg);
            ?>
        </p>
        <label for="email" id="mail" class="label">Email: </label>
        <input type="text" id="email" size="20" name="email" value="<?php echo $email ?>" class="<?php 
            echo ($emailValid ?  "" : "errorInput");
            ?>"/>




        <p id="errorCity" class="error">
            <?php 
            echo ($cityValid ?  "" : $cityErrMsg);
            ?>
        </p>
        <label for="city" id="citylbl" class="label">City: </label>
        <input type="text" id="city"  name="city" value="<?php echo $city ?>" class="<?php 
            echo ($cityValid ?  "" : "errorInput");
            ?>"/>




        <p id="errorCountry" class="error">
            <?php 
            echo ($countryValid ?  "" : $countryErrMsg);
            ?>
        </p>
        <label for="country" id="countrylbl" class="label">Country: </label>
        <select id="country" name="country" class="<?php 
            echo ($countryValid ?  "" : "errorInput");
            ?>">
            <option value="Canada">Canada</option>
            <option value="USA">United States</option>
            <option value="Argentina">Argentina</option>
            <option value="Brazil">Brazil</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Peru">Peru</option>
            <option value="Poland">Poland</option>
        </select>
        <br/>

        <label for="professional" id="professionallbl" class="label">Professional: </label>
        <input type="checkbox" id="professional" name="professional"/>
        

        <p id="errorPassword" class="error">
            <?php 
            echo ($passwordValid ?  "" : $passwordErrMsg);
            ?>
            
        </p>
        <label for="password" id="passwordlbl" class="label">Password: </label>
        <input type="password" id="password" name="password" value="<?php echo $password ?>"  class="<?php 
            echo ($passwordValid ?  "" : "errorInput");
            ?>"/>

        <p id="errorConfirmPassword" class="error">
            <?php 
            echo ($passwordValid ?  "" : $passwordErrMsg);
            ?>
        </p>
        <label for="confirmPassword" id="confirmPasswordlbl" class="label">Confirm Password: </label>
        <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $password ?>"  class="<?php 
            echo ($passwordValid ?  "" : "errorInput");
            ?>"/>
        
        <br/>
        <input type="submit" name="newPlayerSub" class="btn btn-success" value="Add New Player" id="newPlayerSub"/>
    </form>
    <?php
    }else{
        echo "New Player added";
    }
    
    ?>

</body>
</html>



