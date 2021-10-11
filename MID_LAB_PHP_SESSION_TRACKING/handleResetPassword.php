<?php
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $birthYear = $_POST['birthYear'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password != $confirmPassword) {
        echo 'Passwords do not match';
        return;
    }

    $users = json_decode($_COOKIE['users'], true);

    for ($i = 0; $i < count($users); ++$i) {
        if ($users[$i]['email'] == $email && substr($users[$i]['dateOfBirth'], -4) == $birthYear) {
            $users[$i]['password'] = $password;
            setcookie('users', json_encode($users), time() + 3600, '/');
            header('location: dashboard.php');
            return;
        }
    }
    echo 'Information incorrect';
    return;
}
