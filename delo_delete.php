<?php

include 'db.php';

$id=$_GET['id'];

$query="DELETE FROM `dela` WHERE id=$id";

$result=  mysqli_query($link, $query);

header("location: dodaj_delo.php");