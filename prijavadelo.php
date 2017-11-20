<?php

include 'db.php';
session_start();
$uid=$_SESSION['uid'];
$id=$_GET['id'];
if(isset($_SESSION['id'])){
    header("Location: index.php");
}

$query="INSERT INTO `prijave`(`id`, `user_id`, `delo_id`) VALUES ('','$uid','$id')";

$result=  mysqli_query($link, $query);

echo $query;
header("Location: dodaj_delo.php");

