<?php
session_start();

function isCredCorrect($username, $password)
{
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

    if ($username != "") {
        if ($password != "") {
            if (isCredCorrect($username, $password)) {
                setcookie('authUser', $username, time() + 3600, '/');
                setcookie('isLoggedIn', 'true', time() + 3600, '/');
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
