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
        $query="select * from podjetja where id=$id";
        
        $result=  mysqli_query($link, $query);
        
        $row=  mysqli_fetch_array($result);
        
        ?>
        <div class="container">
        
        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <div class="podtitle"><?php echo $row['ime'] ?>
                        <br></div>
                    <h1 class="title" id="left">O podjetju</h1>
                    <div class="content">
                        <?php echo 'Naslov: '.$row['naslov'].'<br>'.'Email: '.$row['email'].'<br>'.''
                                . 'Tel: '.$row['tel_st'] ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
    </body>
    <?php
        include 'footer1.php';
        ?>
</html>
