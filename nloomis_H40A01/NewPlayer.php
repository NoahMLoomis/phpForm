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

    
    <form action="" method="get" name="myForm">
    <h1>Add a new player</h1>
        <p id="errorFirstName" class="error"></p>
        <label for="firstName" id="fName" class="label">First Name: </label>
        <input type="text" id="firstName" name="firstName"/><br/>

        <p id="errorLastName" class="error"></p>
        <label for="lastName" id="lName" class="label">Last Name: </label>
        <input type="text" id="lastName" name="lastName"/><br/>

        <p id="errorEmail" class="error"></p>
        <label for="email" id="mail" class="label">Email: </label>
        <input type="text" id="email" size="20" name="email"/>

        <p id="errorCity" class="error"></p>
        <label for="city" id="cit" class="label">City: </label>
        <select id="city" name="city">
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
        
        <p id="errorPhone" class="error"></p>
        <label for="phone" id="phoneNum" class="label">Phone Number: </label>
        <input type="text" id="phone" name="phone"/><br/>

        <p id="errorPassword" class="error"></p>
        <label for="password" id="passwordlbl" class="label">Password: </label>
        <input type="text" id="password" name="professional"/>

        <p id="errorConfirmPassword" class="error"></p>
        <label for="confirmPassword" id="confirmPasswordlbl" class="label">Confirm Password: </label>
        <input type="text" id="confirmPassword" name="confirmPassword"/>
        
        <br/>
        <input type="submit" class="btn btn-success" value="Submit" id="sub"/>
    </form>


</body>






