<?php
$conn=mysqli_connect("localhost","root","rakshi@6304","login_db");
if(!$conn){
    die("Connection failed : ".mysqli_connect_error());
}
$username=$_POST['name'];
$password=$_POST['password'];
$sql="INSERT INTO users (USERNAME,PASSWORD) VALUES ('$username','$password')";
if(mysqli_query($conn,$sql)){
    echo "Registration Successful";
}
else{
    echo "Error: ".mysqli_error($conn);
}
mysqli_close($conn);
?>