<?php
    session_start();
    require_once 'database/database.php';
    require_once 'database/login-inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
        <link rel="stylesheet" href="./src/login.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form action="database/login-inc.php" method="post">
                <h1 class="form__title">LOGIN</h1>

                <div class="form__input-group">
                    <input type="text" class="form__input" name="username" autofocus placeholder="Username">
                </div>
            
                <div class="form__input-group">
                    <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                </div>

                <button class="form__button" type="submit" name="submit">Continue</button>

                <p class="form__text">
                    <a class="form__link" href="./Signup.php" id="linkCreateAccount">Don't have an account?Create account.</a>
                </p>
            </form>
        </div>
    </body>
</html>