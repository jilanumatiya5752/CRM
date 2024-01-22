<?php
session_start();
$targetDirectory = __DIR__ . "/upload";
$servername = "127.0.0.1";
$username = "jilan";
$password = "";
$dbname = "video";
$db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
