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
        $query="select d.id, d.ime, p.ime as name, pod.ime as podrocje, d.lokacija, d.dodano, d.spol from dela d inner join podjetja p on p.id=d.podjetje_id inner join podrocja pod on pod.id=d.podrocje_id where d.id=$id";
        
        $result=  mysqli_query($link, $query);
        
        $row=  mysqli_fetch_array($result);
        
        ?>
        <div class="container">
        
        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <div class="podtitle"><?php echo $row['ime'] ?>
                        <br></div>
                    <h1 class="title" id="left">O delu</h1>
                    <div class="content">
                        <?php echo 'Podjetje: '.$row['name'].'<br>'.'Podrocje: '.$row['podrocje'].'<br>'.''
                                . 'Lokacija: '.$row['lokacija'].'<br>'. 'Spol: '.$row['spol'].'<br>'. 'Dodano: '.$row['dodano'] ?>
                        
                        <br><a href="prijavadelo.php?id=<?php echo $id ?>">Prijava na delo</a>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <?php
        
        
        
        
        
        
        if(isset($_SESSION['id'])){
        
        
        
        
        ?>
        
                <div class="container">

        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">Prijavljeni uporabniki</h1>
                    
                    
                    <?php
                    
                    $query="select u.first_name,u.last_name,u.id from users u inner join prijave p on p.user_id=u.id where delo_id=$id";
                    
                    
                    $result=  mysqli_query($link, $query);
                    
                    
                    while($row=  mysqli_fetch_array($result)){
                        echo '<div>'.'<a href=uporabnik.php?id='.$row['id'].'>'.$row['first_name'].' '.$row['last_name'].'</a>   <a href=posta.php?id='.$row['id'].'>Pošlji</a>' .'</div>';
                    }
                    
                    
                    
                    ?>
                    
                    
                              
                    
                </div>
            </div>
        </div>
        </div>
        <?php } ?>
    </body>
    <?php 
        include 'footer.php';
        ?>
</html>
