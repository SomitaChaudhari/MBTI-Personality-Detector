<?php
    session_start();
    require_once 'database/database.php';
    require_once 'database/signup-inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/login.css">
    <title>SignUp Form</title>
</head>
<body>
    <div class="container">
        <!--SIGNUP Form-->
        <form action="database/signup-inc.php" method="post">
            <h1 class="form__title">CREATE ACCOUNT</h1>

            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" name="username" autofocus placeholder="Username">
            </div>

            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Email Address">
            </div>
        
            <div class="form__input-group">
                <input type="password" class="form__input" name="password" autofocus placeholder="Password">
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input" name="confirmPassword" autofocus placeholder="Confirm Password">
            </div>

            <button class="form__button" type="submit" name="submit">Continue</button>

            <p class="form__text">
                <a class="form__link" href="./login.php" id="linkLogin">Already have an account? Login.</a>
            </p>
        </form>
    </div>
</body>
</html>