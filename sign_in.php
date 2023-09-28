<?php
session_start(); // Start a PHP session for user authentication
error_log(1);
error_reporting(1);


$connect = mysqli_connect("localhost", "root", "", "sign-in-and-sign-up") or die("Connection Failed");

if (isset($_POST['submit'])) {
    $E_mail = $_POST['E_mail']; // Corrected variable name
    $Password = $_POST['Password'];

    // Fetch the hashed password from the database based on the email
    $query = "SELECT * FROM `sign-up` WHERE E_mail=?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $E_mail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    // print_r ($row);
    if ($row) {
        $hashedPasswordFromDB = $row['Password'];
        echo "<pre>";
        echo PHP_EOL;
        echo $hashedPasswordFromDB;
        echo PHP_EOL;
        echo $Password;
        echo PHP_EOL;

        // Use password_verify to check the entered password against the hashed password
        if (password_verify($Password, $hashedPasswordFromDB)) {
            // Passwords match, user is authenticated
            $_SESSION['user_email'] = $E_mail; // Store user email in session
            header('location: http://localhost/sign-in-and-sign-up/home.php');
            exit;
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo '<script> 
        if (confirm("User not found. Do you want to go back to the home page?")) {
            window.location.href = "http://localhost/sign-in-and-sign-up/index.php";
        }
            </script>';
    }
}
