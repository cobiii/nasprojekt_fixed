<?php

include 'db.php';
session_start();
$uid=$_SESSION['uid'];
$ime=$_POST['ime'];
$poznavanje=$_POST['poznavanje'];
if(isset($_SESSION['id'])){
    header("Location: index.php");
}

$query="INSERT INTO `spretnosti`(`id`, `ime`, `poznavanje`, `user_id`) VALUES ('','$ime','$poznavanje','$uid')";

$result=  mysqli_query($link, $query);

echo $query;
header("Location: mojprofil.php");

