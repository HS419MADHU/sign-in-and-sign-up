<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        background-attachment: fixed;
        background:#f2ccff;
    }
    </style>
</head>
<body>
    
<form action="http://localhost/sign-in-and-sign-up/reg_details.php" method="post">
    <table> 
        <tr> <td>
        Name <input type="text" class=" " name="Name" required></td> </tr>
        <tr> <td> E-mail  <input type="email" class=" " name="E_mail"  required> </td> </tr>
       <tr> <td> Password  <input type="password" class=" " name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td> </tr>

    </table>
    <input type="submit" name="submit" value="Submit">
    <input type="reset">
</form>
</body>
</html>