<?php


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
      <?php   
      
      include 'header.php'; 
      include 'db.php';
      
      ?>
    
    <div class="container">
        
        <div class="tab-content-noborder clear">
            <div class="tab-pane-white active clear"><div class="mainvrsta">
                    <h1 class="title">AKTUALNA DELA</h1>
                    
                    <?php
                    
                    
                    
                    
                    
                    ?>
                    
                    
                    <form action="" method="get">
                        <input type="text" placeholder="Ime dela" name="ime" >
                        <input type="text" placeholder="Lokacija" name="lokacija">
                        Spol: <select name="spol">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="zenski">Ženski</option>
                            <option value="moski">Moski</option>
                            <option value="oboje">Oboje</option>
                        </select><br>
                        Področje: <select name="podrocje">
                            <option disabled selected value> -- select an option -- </option>
                            <?php 
                            $query="select * from podrocja";
                            
                            $result=  mysqli_query($link, $query);
                            
                            while($row=  mysqli_fetch_array($result)){
                                echo '<option value='.$row['id'].'>'.$row['ime'].'</option>';
                            }
                            ?>
                            
                        </select>
                        <br><br>
                        <input type="submit" value="Išči delo">
                    </form>
                    
                    
                    <?php 
                    
                    if(!empty($_GET['ime'])){
                        $getime=$_GET['ime'];
                    }
                    if(!empty($_GET['lokacija'])){
                        $getlokacija=$_GET['lokacija'];
                    }
                    if(isset($_GET['spol'])){
                        $getspol=$_GET['spol'];
                    }
                    if(isset($_GET['podrocje'])){
                        $getpodrocje=$_GET['podrocje'];
                    }
                    
                    $query = "SELECT * FROM dela";
    $conditions = array();

    if(! empty($getime)) {
      $conditions[] = "ime='$getime'";
    }
    if(! empty($getlokacija)) {
      $conditions[] = "lokacija='$getlokacija'";
    }
    if(! empty($getspol)) {
      $conditions[] = "spol='$getspol'";
    }
    if(! empty($getpodrocje)) {
      $conditions[] = "podrocje_id='$getpodrocje'";
    }

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }

    $result = mysqli_query($link,$sql);
                    
                    $count=  mysqli_num_rows($result);
                    
                    if($count==0){
                        echo "<h3>Ni zadetkov</h3>";
                        
                    }
                    else{
                    ?>
                    
                    
                    
                    
             
                    
                    
                    <table class="mojadela">
                        <tr>
                            <th>Ime dela</th>
                            <th>Lokacija</th>
                            <th>Dodano</th>
                            <th>Spol</th>
                        </tr>
                        
                        <?php
                        while($row=  mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><a href="delo.php?id=<?php echo $row['id'] ?>"><?php echo $row['ime'] ?></a></td>
                            <td><?php echo $row['lokacija'] ?></td>
                            <td><?php echo $row['dodano'] ?></td>
                            <td><?php echo $row['spol'] ?></td>
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
<?php include 'footer.php' ?>
</html>