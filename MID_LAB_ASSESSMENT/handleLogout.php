<?php

    session_start();
    setcookie("isLoggedIn",'false');
    header('location: login.php')

?>