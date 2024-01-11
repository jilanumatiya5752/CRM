<?php
include 'db.php';
    $id=$_GET['id'];
    $url = "SELECT * FROM reel WHERE id = '$id'";
    $image = mysqli_query($db, $url);
    $sql = "DELETE FROM reel WHERE id='$id'";
    $result = mysqli_query($db, $sql);
    header ("location: user.php");

?>