

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body class="loginpage"> 
        <?php include 'header.php' ?>
        <div class="container login">
        <h1>Pomagamo vam do boljše zaposlitve</h1>
        <div class="tab-content clear">
	<div class="tab-pane active clear"><div class="loginvrsta">
	<h3>Prijava z</h3>
        <a href="facebook_login.php" class="clear socialButton"><i class="fa fa-facebook"></i><span>Facebook</span></a>
	<a href="google_index.php" class="clear socialButton"><i class="fa fa-google"></i><span>Google</span></a>
	<br />

        </div>
            <div class="loginvrsta">
                <h3>Prijava kot podjetje</h3>
                <form action="prijavapodjetje.php" method="post">
                    <input type="text" placeholder="Uporabnisko ime" name="ime" required><br>
                    <input type="password" name="geslo" placeholder="geslo" required>
                    <input type="submit" value="Prijava">
                </form>
            </div>
        </div>
        </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
