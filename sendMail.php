<?php
$error = NULL;
if (isset($_POST['submit'])){
    //Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $types = $_POST['types'];

    //connect to database
    $mysqli = NEW MySQLi('localhost','root','','mbtipersonality');

    //Insert informtion into database
    $insert = $mysqli->query("INSERT INTO counsel(username,email,types) VALUES('$username','$email','$types')");

    if($insert){
        //send email
        $to = $email;
        $subject = "Counselling Confirmation";
        $message = "Thank you for choosing us! Counsellor will be contacting you shortly.";
        $headers = "From: mailtopoojanaik@gmail.com \r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        mail($to,$subject,$message,$headers);
        echo '<script type="text/javascript">'; 
        echo 'alert("Form Submitted! Please Check Your Email.");'; 
        echo 'window.location.href = "counselling.php";';
        echo '</script>';
    }
    else{
        echo $mysqli->error;
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/sendemail.css">
    <title>Send Mail</title>
  </head>
  <body>
  <div class="container" style="width: 34em;">
        <h2>COUNSELLING FORM</h2>
        <form method="POST" action="">
            <div class="form-group" style= "margin-top: 1em;">
                <label for="username">Full Name:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
            </div>
            <div class="form-group" style= "margin-top: 1em;">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group" style= "margin-top: 1em;">
            <label for="email">Select Your Personality Type:</label>
                <select class="form-select" aria-label="Select Your Personality Type" id="types" name="types" required>
                    <option value="ISTJ">ISTJ</option>
                    <option value="ISTP">ISTP</option>
                    <option value="ISFJ">ISFJ</option>
                    <option value="ISFP">ISFP</option>
                    <option value="INFJ">INFJ</option>
                    <option value="INFP">INFP</option>
                    <option value="INTJ">INTJ</option>
                    <option value="INTP">INTP</option>
                    <option value="ESTP">ESTP</option>
                    <option value="ESTJ">ESTJ</option>
                    <option value="ESFP">ESFP</option>
                    <option value="ESFJ">ESFJ</option>
                    <option value="ENFP">ENFP</option>
                    <option value="ENFJ">ENFJ</option>
                    <option value="ENTP">ENTP</option>
                    <option value="ENTJ">ENTJ</option>
                </select>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <?php
    echo $error;
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>