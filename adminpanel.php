<?php
session_start();

if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    
    <body>
        <?php include 'header.php' ?>
        <div class="container login">
            <h1>Dobrodošel Admin: <?php echo $_SESSION['givenName'] ?></h1>
            <div class="tab-content clear">
                <div role="tabpanel" class="tab-pane active clear" id="log">
                    <div class="loginvrsta">
                         <table>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
