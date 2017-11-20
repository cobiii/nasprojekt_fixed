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
        ?>
        <div class="container">
        
        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">DODAJ DELO</h1>
                    <form action="delo_insert.php" method="post">
                        <input type="text" placeholder="Ime dela" name="ime" required>
                        <input type="text" placeholder="Lokacija" name="lokacija" required>
                        Spol: <select name="spol">
                            <option value="zenski">Ženski</option>
                            <option value="moski">Moski</option>
                            <option value="oboje">Oboje</option>
                        </select><br>
                        Področje: <select name="podrocje">
                            <?php
                            $query="select * from podrocja";
                            
                            $result=  mysqli_query($link, $query);
                            
                            while($row=  mysqli_fetch_array($result)){
                                echo '<option value='.$row['id'].'>'.$row['ime'].'</option>';
                            }
                            ?>
                            
                        </select><br><br>
                        <input type="submit" value="Dodaj delo">
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
        
        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">MOJA DELA</h1>
                  
                    <?php 
                    
                    include 'db.php';
                    $id=$_SESSION['id'];
                    
                    $query="SELECT  dela.id,dela.ime, podjetje_id, podrocje_id, lokacija, dodano, spol, podrocja.ime as name FROM `dela` inner join podrocja on podrocja.id=dela.podrocje_id WHERE podjetje_id=$id";
                    
                    $result=  mysqli_query($link, $query);
                    
                    $count=  mysqli_num_rows($result);
                    
                    if($count==0){
                        echo "<h3>Ni zadetkov</h3>";
                        
                    }
                    else{
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    <table class="mojadela">
                        <tr>
                            <th>Ime dela</th>
                            <th>Področje</th>
                            <th>Lokacija</th>
                            <th>Dodano</th>
                            <th>Spol</th>
                            <th>Izbriši</th>
                        </tr>
                        
                        <?php
                        while($row=  mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><a href="delo.php?id=<?php echo $row['id'] ?>"><?php echo $row['ime'] ?></a></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['lokacija'] ?></td>
                            <td><?php echo $row['dodano'] ?></td>
                            <td><?php echo $row['spol'] ?></td>
                            <td><a href="delo_delete.php?id=<?php echo $row['id'] ?>">x</a></td>
                        </tr>
                            
                            
                            
                            
                            
               <?php         }
                        ?>
                        
                    </table>
                    
                    
                    
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        </div>
        
    </body>
    <?php
        include 'footer.php';
        ?>
</html>
