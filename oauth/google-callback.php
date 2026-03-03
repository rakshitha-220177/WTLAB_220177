<?php
require 'config.php';

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $user = $oauth->userinfo->get();

    echo "<h2>Login Success</h2>";
    echo "Name: " . $user->name . "<br>";
    echo "Email: " . $user->email . "<br>";
    echo "<img src='".$user->picture."' width='100'>";
}