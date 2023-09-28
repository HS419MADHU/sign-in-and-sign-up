<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start(); // Start a PHP session for user authentication

// Check if the user is not logged in, redirect if not
if (!isset($_SESSION['user_email'])) {
    header('Location: http://localhost/sign-in-and-sign-up/login.php'); // Redirect to the login page
    exit;
}    

if (isset($_POST['submit'])) {
    $old_Password = $_POST['old_Password'];
    $new_Password = $_POST['new_Password'];
    $confirm_Password = $_POST['confirm_Password'];

    // Verify that the new password and confirm password match
    if ($new_Password !== $confirm_Password) {
        echo '<script> 
        if (confirm("old password and confirm password not matched. Do you want to go back to the home page?")) {
            window.location.href = "http://localhost/sign-in-and-sign-up/index.php";
        }        </script>';
        
    } else {
        // Connect to the database (adjust database connection details)
        $connect = mysqli_connect("localhost", "root", "", "sign-in-and-sign-up") or die("Connection Failed");

        // Fetch the hashed password from the database based on the user's email (adjust the SQL query)
        $user_email = $_SESSION['user_email'];
        $query = "SELECT Password FROM `sign-up` WHERE E_mail=?";
        $stmt = mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "s", $user_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $hashedPasswordFromDB = $row['Password'];

            // Use password_verify to check the entered old password against the hashed password
            if (password_verify($old_Password, $hashedPasswordFromDB)) {
                // Passwords match, update the password in the database with the new one
                $newHashedPassword = password_hash($new_Password, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE `sign-up` SET Password=? WHERE E_mail=?";
                $updateStmt = mysqli_prepare($connect, $updateQuery);
                mysqli_stmt_bind_param($updateStmt, "ss", $newHashedPassword, $user_email);
                mysqli_stmt_execute($updateStmt);
                mysqli_stmt_close($updateStmt);
                    
                echo '<script> 
                if (confirm("password updated. Do you want to go back to the home page?")) {
                    window.location.href = "http://localhost/sign-in-and-sign-up/index.php";
                }    
                            </script>';
                        } else {
                echo '<script> 
                if (confirm("invalid old password. Do you want to go back to the home page?")) {
                    window.location.href = "http://localhost/sign-in-and-sign-up/index.php";
                }                </script>';
            }
        } else {
            echo '<script> 
            alert("user not found. ");
            </script>';
        }
        
        mysqli_close($connect);
    }
}
?>
</body>
</html>





