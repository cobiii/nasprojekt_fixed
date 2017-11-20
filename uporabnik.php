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
        include 'db.php';
        $id=$_GET['id'];
        $query="select * from users where id=$id"  ;
        $result=  mysqli_query($link, $query);
        $row=  mysqli_fetch_array($result);
        ?>
        
        <div class="container">

        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title"><?php echo $row['first_name'].' '.$row['last_name']     ?></h1>
                    
                    <?php 
                    
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
                    <h1 class="title">ŽIVLJENJEPIS</h1>
                    
                    <?php 
                    
                    $query="select zivljenjepis from users where id=$id";
                    $result=  mysqli_query($link, $query);
                    
                    
                    $row=  mysqli_fetch_array($result);
                    
                    echo $row['zivljenjepis'];
                    ?>
                </div>
            </div>
        </div>
        </div>
    </body>
    <?php
        include 'footer.php';
        ?>
</html>
