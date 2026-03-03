<?php
$conn=mysqli_connect("localhost","root","rakshi@6304","login_db");
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * FROM users WHERE USERNAME='$user' AND PASSWORD='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
echo "Login Succesfull";
}
else{
echo "Login failed";
}
?>