<?php


if (isset($_POST['submit'])) {

    session_start();

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];

    $users = json_decode($_COOKIE['users'], true);
    $username = $_COOKIE['authUser'];
    for ($i = 0; $i < count($users); ++$i) {
        if ($users[$i]['username'] == $username) {
            $users[$i]['username'] = $username;
            $users[$i]['name'] = $name;
            $users[$i]['email'] = $email;
            $users[$i]['gender'] = $gender;
            $users[$i]['dateOfBirth'] = $dateOfBirth;

            break;
        }
    }

    setcookie('users', json_encode($users), time() + 3600, '/');

    header('location: ../dashboard.php');
}
