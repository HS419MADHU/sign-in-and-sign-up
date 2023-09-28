<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$_SESSION['user_email'];
$_SESSION['user_name'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-attachment: fixed;
            background: #f2ccff;
        }

        a {
            color: purple;
            display: inline;
            font-size: 17px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?= $_SESSION['user_name'] ?>
    <h3>Login form </h3>
    <form action="http://localhost/sign-in-and-sign-up/sign_in.php" method="post">

        Email : &nbsp &nbsp <input type="email" class="" name="E_mail" required> <br> <br>
        Password : <input type="password" class="" name="Password" required> <br> <br>
        <input type="submit" name="submit" value="submit">
        &nbsp &nbsp <button> <a href="register.php"> Sign up </button> </a>

    </form>
</body>

</html>