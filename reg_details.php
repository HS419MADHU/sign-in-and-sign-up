<?php
$Name = $_POST['Name'];
$E_mail = $_POST['E_mail'];
$Password = $_POST['Password'];

// Hash the password
$hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

$conn = new mysqli('localhost', 'root', '', 'sign-in-and-sign-up');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO `sign-up`(`Name`, `E_mail`, `Password`) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $Name, $E_mail, $hashedPassword); // Store the hashed password
    $execval = $stmt->execute();

    
    header ('location: http://localhost/sign-in-and-sign-up/index.php');
    
    $stmt->close();
    $conn->close();
}
?>





