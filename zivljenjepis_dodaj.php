<?php

include 'db.php';
session_start();
$zivljenjepis=$_POST['zivljenjepis'];
$id=$_SESSION['uid'];



$query="update users set zivljenjepis=$zivljenjepis where id=$id";

$result=  mysqli_query($link, $query);

echo $query;
header("Location: mojprofil.php");    
