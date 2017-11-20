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
        include 'db.php'
        ?>
        <div class="container">

        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">NAJDI PODJETJE</h1>
                    <form action="" method="get">
                        <input type="text" name="ime" placeholder="Katero podjetje iščeš?">
                        <input type="submit" value="Najdi">
                    </form>
                </div>
            </div>
        </div>
        </div><?php
        if(!empty($_GET)){
            $name=$_GET['ime'];
            
            
            $query="SELECT * from podjetja where lower(ime) like '%$name%'";
            
            $result=  mysqli_query($link, $query);
            
            $count= mysqli_num_rows($result);
            
            if($count==0){
                $naslov='Ni zadetkov';
            }
            else{
                $naslov='Vsi zadetki za '.$name;
            }
                    
                    
         ?>
        <div class="container">

        <div id="margin" class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h2><?php if(isset($naslov)){ echo $naslov; } ?></h2>
                    <?php
                    while($row=  mysqli_fetch_array($result)){
                    ?>
                    
                    <div class="job-ad">
                        <a href='podjetje.php?id=<?php echo $row['id'] ?>'>
                        
                            <div>
                                <div class='podtitle'>    <?php echo $row['ime'] ?><br></div>
                                <div class='podnaslov'><?php echo $row['naslov'] ?></div>
                            </div>
                        
                        </a>
                        
                        
                    </div>
                    <?php } ?>
            </div>
        </div>
        </div>
        </div>
       <?php } ?>
            <?php include 'footer.php' ?>
    </body>
    
</html>
