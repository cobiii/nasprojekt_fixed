<?php

include 'db.php';
session_start();
$ime=$_POST['ime'];
$spol=$_POST['spol'];
$lokacija=$_POST['lokacija'];
$id=$_SESSION['id'];
$podrocje=$_POST['podrocje'];
$date=date('Y-m-d');

$query="INSERT INTO `dela`(`id`, `ime`,`podrocje_id`, `podjetje_id`, `lokacija`, `dodano`, `spol`) VALUES ('','$ime','$podrocje','$id','$lokacija','$date','$spol')";

$result=  mysqli_query($link, $query);

echo $query;
header("Location: dodaj_delo.php");