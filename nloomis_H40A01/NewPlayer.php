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
    <div>
        <p id="errorFirstName" class="error"></p>
    </div>
    <div>
        <br/>
        <label for="firstName" id="fName" class="label">First Name: </label>
        <input type="text" id="firstName" name="firstName"/><br/><br/>
    </div>
    <div>
        <p id="errorLastName" class="error"></p>
    </div>
    <div>
        <label for="lastName" id="lName" class="label">Last Name: </label>
        <input type="text" id="lastName" name="lastName"/><br/><br/>
    </div>
    <div>
        <p id="errorPhone" class="error"></p>
    </div>
    <div>
        <label for="phone" id="phoneNum" class="label">Phone Number: </label>
        <input type="text" id="phone" name="phone"/><br/><br/>
    </div>

    <div>
        <p id="errorCity" class="error"></p>
    </div>
    <div>
        <label for="city" id="cit" class="label">City: </label>
        <input type="text" id="city" name="city"/><br/><br/>
    </div>

    <div>
        <p id="errorEmail" class="error"></p>
    </div>
    <div>
        <label for="email" id="mail" class="label">Email: </label>
        <input type="text" id="email" size="20" name="email"/>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Submit" id="sub"/>
    </div>
    </form>


</body>






