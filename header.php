<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><div class="table">
        <div class="floatleft padding">
            <a href="index.php" alt=""><img src="assets/slike/logo.png" alt="" height="50px" class="logo"></a>
        </div>
   <?php   $url=   $_SERVER['REQUEST_URI']; ?>
  <?php include_once 'session.php';
  if(isset($_SESSION['uid']))
  {
      ?>
        <div class="floatright"><ul><li><a href="logout.php">ODJAVA</a></li></div>
            <div class="floatright"><ul><li><a href="mojprofil.php">MOJ PROFIL</a></li></div><?php
  }
  else if(isset($_SESSION['id'])){
      ?><div class="floatright"><ul><li><a href="logout.php">ODJAVA</a></li></div><?php
      ?><div class="floatright"><ul><li><a href="dodaj_delo.php">DODAJ DELO</a></li></div><?php
  }
  else{ ?>
      <div class="floatright"><ul>
  <li><a <?php if($url=='/nasprojekt/login.php'){ ?>class="active"<?php } ?> href="login.php">PRIJAVA</a></li></div>
      <?php } ?>
       <div class="floatright">
        <ul>
  <li><a <?php if($url==='/nasprojekt/aktualnadela.php'){ ?>class="active"<?php  } ?> href="index.php">AKTUALNA DELA</a></li>    
  <li><a <?php if($url==='/nasprojekt/kandidati.php'){ ?>class="active"<?php  } ?> href="podjetja.php">PODJETJA</a></li>
  <li><a <?php if($url=='/nasprojekt/diplomati.php'){ ?>class="active"<?php } ?> href="zadelodajalce.php">ZA DELODAJALCE</a></li>
  <li><a <?php if($url=='/nasprojekt/kontakt.php'){ ?>class="active"<?php } ?> href="kontakt.php">KONTAKT</a></li></div>
    </div>
</body>
   
</html>
