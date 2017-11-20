<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body class="loginpage">
        <?php
        include 'header.php'
        ?>
                <div class="container">

        <div class="tab-content clear">
            <div class="tab-pane active clear"><div class="mainvrsta">
                    <h1 class="title">KONTAKT</h1>
                    <form action="posta_support.php" method="post">
                        <input type="text" name="email" placeholder="Vaš email" required>
                        <input type="text" name="tema" placeholder="Tema" required>
                        <textarea rows="6" cols="50" placeholder="Sporočilo" name="sporocilo"></textarea>
                        <input type="submit" value="Pošlji">
                    </form>
                </div>
            </div>
        </div>
                </div>
                    <?php include 'footer.php'; ?>
    </body>
</html>
