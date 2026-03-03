<?php
require 'config.php';

if(isset($_GET['code'])) {

    $code = $_GET['code'];

    $token_url = "https://github.com/login/oauth/access_token";

    $postData = [
        "client_id" => GITHUB_CLIENT_ID,
        "client_secret" => GITHUB_CLIENT_SECRET,
        "code" => $code
    ];

    $ch = curl_init($token_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json"]);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if(!isset($data['access_token'])) {
        die("Access token not received");
    }

    $access_token = $data['access_token'];

    // Fetch user data
    $ch = curl_init("https://api.github.com/user");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: token $access_token",
        "User-Agent: PHP-App"
    ]);

    $user = curl_exec($ch);
    curl_close($ch);

   $userData = json_decode($user, true);

session_start();

$_SESSION['user'] = [
    'name' => $userData['name'] ?? $userData['login'],
    'email' => $userData['email'] ?? 'Not Public',
    'provider' => 'github'
];

header("Location: dashboard.php");
exit();
}