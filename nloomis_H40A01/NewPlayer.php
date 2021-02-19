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
    require "./other/PlayerFunctions.php";

    if ($displayForm){

?>
    <h1>Add a new player</h1>
    <form action="NewPlayer.php" method="post" name="newPlayerForm" id="newPlayerForm">
    
        <label for="firstName" id="fName" class="label">First Name: </label>
        <input type="text" id="firstName" name="firstName" value="<?php echo $fName ?>"
        class="<?php
            echo ($fNameValid ?  "" : "errorInput");
            ?>"
        />
        
        <p id="errorFirstName" class="error">
            <?php 
            echo ($fNameValid ?  "" : $fNameErrMsg);
            ?>
        </p>

     
        <label for="lastName" id="lName" class="label">Last Name: </label>
        <input type="text" id="lastName" name="lastName" value="<?php echo $lName ?>" class="<?php 
            echo ($lNameValid ?  "" : "errorInput");
            ?>"/>
        <p id="errorLastName" class="error">
                    <?php 
                    echo ($lNameValid ?  "" : $lNameErrMsg);
                    ?>
        </p>

        
        <label for="email" id="mail" class="label">Email: </label>
        <input type="text" id="email" size="20" name="email" value="<?php echo $email ?>" class="<?php 
            echo ($emailValid ?  "" : "errorInput");
            ?>"/>

        <p id="errorEmail" class="error">
            <?php 
            echo ($emailValid ?  "" : $emailErrMsg);
            ?>
        </p>

        
        <label for="city" id="citylbl" class="label">City: </label>
        <input type="text" id="city"  name="city" value="<?php echo $city ?>" class="<?php 
            echo ($cityValid ?  "" : "errorInput");
            ?>"/>
        <p id="errorCity" class="error">
            <?php 
            echo ($cityValid ?  "" : $cityErrMsg);
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
        <p id="errorCountry" class="error">
            <?php 
            echo ($countryValid ?  "" : $countryErrMsg);
            ?>
        </p>

        <label for="professional" id="professionallbl" class="label">Professional: </label>
        <input type="checkbox" id="professional" name="professional"/>
        <p></p>

        <label for="password" id="passwordlbl" class="label">Password: </label>
        <input type="password" id="password" name="password" value="<?php echo $password ?>"  class="<?php 
            echo ($passwordValid ?  "" : "errorInput");
            ?>"/>

        <p id="errorPassword" class="error">
            <?php 
            echo ($passwordValid ?  "" : $passwordErrMsg);
            ?>    
        </p>
        
        
        <label for="confirmPassword" id="confirmPasswordlbl" class="label">Confirm Password: </label>
        <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $password ?>"  class="<?php 
            echo ($passwordValid ?  "" : "errorInput");
            ?>"/>
        <p id="errorConfirmPassword" class="error">
            <?php 
            echo ($passwordValid ?  "" : $passwordErrMsg);
            ?>
        </p>
        <input type="submit" name="newPlayerSub" class="btn btn-success" value="Add New Player" id="newPlayerSub"/>
    </form>
    <?php
    }else{

      

        $logString = "$fName~$lName~$email~$city~$country~" . ($professional ? "yes" : "no");

        $openFile = fopen("./other/players.txt", 'a');
        fwrite($openFile,"$logString\n");
      
        fclose("./other/players.txt");
        ?>

    <div id="playerAddedDiv">
    <h2>Player added</h2>
    
    <p><?php echo "$fName $lName" ?> has been added to your roster</p>
    <a href='./NewPlayer.php'>Continue</a>
    </div>
    
    <?php
}

//Logic to display table 
if (filesize("./other/players.txt")){
    $fileInfoArr = file("./other/players.txt");
    ?>
    <div id="wrapper">
        <h2>Existing Players</h2>
    <table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>City</th>
        <th>Country</th>
        <th>Professional</th>
    </tr>

    <?php
      foreach ($fileInfoArr as $singlePerson){

        $singlePersonDetails = explode("~", $singlePerson);
        echo "<tr>";
        foreach ($singlePersonDetails as $detail){
            echo "<td>$detail</td>";
        }
        echo "</tr>";

      }

    ?>

    </table>
      </div>

    <?php
    
    fclose($file);
}
    ?>
    
    
</body>
</html>



