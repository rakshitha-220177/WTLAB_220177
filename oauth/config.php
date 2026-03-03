<?php
require 'vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();




$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);

$client->addScope("email");
$client->addScope("profile");
define('GITHUB_CLIENT_ID', $_ENV['GITHUB_CLIENT_ID']);
define('GITHUB_CLIENT_SECRET', $_ENV['GITHUB_CLIENT_SECRET']);
define('GITHUB_REDIRECT_URI', $_ENV['GITHUB_REDIRECT_URI']);
?>