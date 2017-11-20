<?php
$output = NULL;
$mysqli = NEW mysqli('localhost', 'root', '', 'projekt_php_ekipe');

if (isset($_POST['submit']))
{

    $password = $_POST['password'];
    
    if(empty($password))
    {
        $output = "please fill all the fields";           
    }
    else
    
        $password = $mysqli->real_escape_string($password);
        
        $query = $mysqli->query("SELECT * FROM users WHERE password = '$password'");
        
        if($query->num_rows == 0)
        {
            $output = "invalid username/password";
        }
        else 
        {
            session_start();
        header('location: adminpanel.php');
        }
        
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body> 
        <?php include 'header.php' ?>
        <div class="container login">
            <h1>Dobrodošel Administrator</h1>
            <div class="tab-content clear">
                <div role="tabpanel" class="tab-pane active clear" id="log">
                    <div class="loginvrsta">
                    <h3>Prijava Admina:</h3>                  
                    <br />
                    
                    <form method="post" autocomplete="off">
            <table>
                <tr>
                    <td align="right">Password:</td>
                    <td><input type="password" name="password" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Log In" />
                        <a href="register.php" class="button">Register</a>
                    </td>
                </tr>
            </table>
        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>