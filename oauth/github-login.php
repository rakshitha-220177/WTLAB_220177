<?php
require 'config.php';

$githubUrl = "https://github.com/login/oauth/authorize?" . http_build_query([
    'client_id' => GITHUB_CLIENT_ID,
    'redirect_uri' => GITHUB_REDIRECT_URI,
    'scope' => 'user'
]);

header("Location: $githubUrl");
exit();