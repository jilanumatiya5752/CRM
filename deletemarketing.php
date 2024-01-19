<?php
include 'db.php';
$id = $_GET['id'];
$url = "SELECT * FROM campaign WHERE id = '$id'";
$image = mysqli_query($db, $url);
$sql = "DELETE FROM campaign WHERE id='$id'";
$result = mysqli_query($db, $sql);
header("location: marketing.php");

?>