<?php
session_start();

$targetDirectory = __DIR__ . "/upload";
$servername     = "127.0.0.1";
$username     = "root";
$password     = "";
$dbname="video"; 
$db=mysqli_connect($servername,$username,$password,$dbname);

?>