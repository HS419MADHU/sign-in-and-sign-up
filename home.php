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
</head>
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

    div {
        color: blue;
        align-items: center;

    }
</style>

<body>
    <h5>
        <b><?= $_SESSION['user_name'] ?></b>
    </h5>


    <h1>
        <div> Reset your Password </div>
    </h1>
    <form action="http://localhost/sign-in-and-sign-up/reset.php" method="post">
        <div>
            old_Password : </div> <br> <input type="password" name="old_Password" title="enter old password" required> <br> <br>
        <div> new_Password :</div><br> <input type="password" name="new_Password" required> <br><br>
        <div>confirm_Password : </div> <input type="password" name="confirm_Password" required>
        <br> <br>
        <input button type="submit" name="submit" value="submit"> </button>
    </form>

</body>

</html>