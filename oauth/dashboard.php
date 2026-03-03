<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: github-login.php");
    exit();
}

$user = $_SESSION['user'];
?>

<h2>Welcome <?php echo $user['name']; ?></h2>
<p>Email: <?php echo $user['email']; ?></p>
<p>Login Provider: <?php echo $user['provider']; ?></p>

<a href="logout.php">Logout</a>