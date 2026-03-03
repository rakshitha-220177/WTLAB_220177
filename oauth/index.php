<?php
require 'config.php';

$authUrl = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Google Login</title>
</head>
<body>

<h2>Login with Google</h2>

<a href="<?= $authUrl ?>">Login with Google</a>

</body>
</html>