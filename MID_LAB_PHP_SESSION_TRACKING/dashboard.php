<?php 
session_start(); 
if(isset($_COOKIE['isLoggedIn'])){ 
    if($_COOKIE['isLoggedIn']=='true'){ 
        
        ?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Dashboard of user</h1>
    </body>
</html>

        <?php
        
    } 
    else{ 
        header('location: login.php'); 
    } 
} 
else{ 
    setcookie('isLoggedIn','false', time()+999999,'/'); 
    header('location: home.php'); 
}
?>