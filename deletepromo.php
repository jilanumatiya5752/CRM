<?php
include 'db.php';
$id = $_GET['id'];
$url = "SELECT * FROM promo WHERE id = '$id'";
$image = mysqli_query($db, $url);
$sql = "DELETE FROM promo WHERE id='$id'";
$result = mysqli_query($db, $sql);
header("location: promotion.php");

?>