<?php
session_start();
session_destroy();
header("Location: github-login.php");
exit();