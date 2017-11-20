<?php
    session_start(); //vključimo sejo
    
    //zaščita pred nepooblaščenimi pristopi
    if ((!isset($_SESSION['id']) && !isset($_SESSION['uid'])) && 
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/login.php') && 
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/index.php') && 
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/register.php') &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/login_check.php') &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/google_index.php') &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/gpConfig.php') &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/User.php') &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/fbConfig.php') &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/facebook_login.php') &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/register_insert.php')
            &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/kontakt.php')
            &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/podjetja.php')
            &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/zadelodajalce.php')
            &&
       ($_SERVER['REQUEST_URI'] != '/nasprojekt/dodaj_delo.php')) {
        //preusmeritev na pijavo
        header("Location: login.php");
        
    } 
?> 