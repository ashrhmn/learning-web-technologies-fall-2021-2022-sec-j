<?php
session_start();
if (isset($_POST['logout'])) {
    setcookie('isLoggedIn', 'false', time() + 3600, '/');
    setcookie('authUser', 'null', time() - 10, '/');
    header('location: login.php');
}
