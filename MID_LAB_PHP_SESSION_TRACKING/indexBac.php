<?php 
session_start(); 
if(isset($_COOKIE['isLoggedIn'])){ 
    if($_COOKIE['isLoggedIn']=='true'){ 
        header('location: dashboard.php'); 
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