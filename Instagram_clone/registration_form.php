<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$hashedPassword=password_hash($password, PASSWORD_DEFAULT);
$conn=new mysqli("localhost","root","rakshi@6304","userdb");
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
$sql="INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$hashedPassword')";
if ($conn->query($sql)===TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: ".$conn->error;
}
$conn->close();
?>