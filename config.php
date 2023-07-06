<?php

if (!defined('DB_HOST')) {
    define('DB_HOST', 'database');
}

if (!defined('DB_USER')) {
    define('DB_USER', 'admin');
}

if (!defined('DB_PASS')) {
    define('DB_PASS', 'admin');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'video-games');
}

// on établit la connexion
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// on vérifie la connexion
if (!$connection) {
    die('Error: ' . mysqli_connect_error());
}

mysqli_query($connection, "SET NAMES UTF8");
?>

