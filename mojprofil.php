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
        ?>
                <div class="container">

        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">MOJ PROFIL</h1>
                    <form action="spretnost_dodaj.php" method="post">
                        <input type="text" placeholder="Spretnost" name="ime">
                         <input type="radio" name="poznavanje" value="1">1 
                        <input type="radio" name="poznavanje" value="2">2 
                        <input type="radio" name="poznavanje" value="3">3 
                        <input type="radio" name="poznavanje" value="4">4 
                        <input type="radio" name="poznavanje" value="5">5
                        <input type="submit" value="Dodaj">
                    </form>
                    
                </div>
            </div>
        </div>
                </div>
        
        <div class="container">

        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">MOJE SPRETNOSTI</h1>
                    
                    <?php 
                    include 'db.php';
                    $id=$_SESSION['uid'];
                    $query="select * from spretnosti where user_id=$id";
                    
                    $result=  mysqli_query($link, $query);
                    
                    while($row=  mysqli_fetch_array($result)){
                        echo $row['ime'].': '.$row['poznavanje'].'<br>';
                    }
                    ?>
                    
                    
                    
                    
                </div>
            </div>
        </div>
                </div>
        <div class="container">

        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">DODAJ ZIVLJENJEPIS</h1>
                    <form action="zivljenjepis_dodaj.php" method="post">
                        <textarea rows="10" cols="60" name="zivljenjepis"></textarea>
                        <input type="submit" value="Dodaj">
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
