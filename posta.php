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
    <body>
        <?php
        include 'header.php';
        $id=$_GET['id'];
        include 'db.php';
        $query="select email from users where id=$id";
        
        $result=  mysqli_query($link, $query);
        
        $row=  mysqli_fetch_array($result);
        
        $gmail=$row['email'];
        ?>
        <div class="container">

        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
        <form action="poslji_posto.php" method="post">
            </td> <td><input type="hidden" name="za" value="<?php echo $gmail ?>" required/><br />
            Zadeva: <td><input type="text" name="zadeva" required/><br />
            Sporočilo: <td><textarea name="sporocilo" cols="70" rows="25" required></textarea><br>
            <input type="submit" value="Pošlji sporočilo" />
        </form>
                </div>
            </div>
        </div>
        </div>
    </body>
    <?php
        include 'footer.php';
        ?>
</html>
