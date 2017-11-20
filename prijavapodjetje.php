<?php

include 'db.php';


$uporabnisko_ime=$_POST['ime'];
$geslo=$_POST['geslo'];

$query="select * from podjetja where uporabnisko_ime='$uporabnisko_ime' and geslo='$geslo'";

$result=  mysqli_query($link, $query);

$count=  mysqli_num_rows($result);

if($count==0){
    header("Location: login.php");
}
else{
    $row=  mysqli_fetch_array($result);
    session_start();
    $_SESSION['id']=$row['id'];
    header("Location: index.php");
}