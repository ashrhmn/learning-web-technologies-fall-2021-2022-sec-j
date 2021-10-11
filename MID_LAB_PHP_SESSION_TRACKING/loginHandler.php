<?php
session_start();

function isCredCorrect($username, $password)
{
    if (!isset($_COOKIE['users'])) {
        return false;
    }
    $users = json_decode($_COOKIE['users'], true);
    $numOfUsers = count($users);

    for ($i = 0; $i < $numOfUsers; ++$i) {
        if ($users[$i]['username'] == $username && $users[$i]['password'] == $password) {
            return true;
        }
    }
    return false;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $timeout = isset($_POST['rememberMe']) ? 9999999 : 3600;

    if ($username != "") {
        if ($password != "") {
            if (isCredCorrect($username, $password)) {
                setcookie('authUser', $username, time() + $timeout, '/');
                setcookie('isLoggedIn', 'true', time() + $timeout, '/');
                header('location: dashboard.php');
            } else {
                echo "invalid username/password";
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid username...";
    }
}
