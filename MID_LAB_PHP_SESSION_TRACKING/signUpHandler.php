<?php

session_start();

if (isset($_POST['submit'])) {
    if ($_POST['username'] != "") {
        if ($_POST['password'] != "") {
            if ($_POST['email'] != "") {
                if ($_POST['password'] == "confirmPassword") {

                    $users = [];
                    if (!isset($_COOKIE['users'])) {
                        setcookie('users', json_encode($users), time() + 3600, '/');
                    } else {
                        $users = json_decode($_COOKIE['users'], true);
                    }

                    $name = '';

                    if (isset($_POST['name'])) {
                        $name = $_POST['name'];
                    }


                    print_r($users);

                    $user = [
                        'username' => $_POST['username'],
                        'password' => $_POST['password'],
                        'email' => $_POST['email'],
                        'name' => $_POST['name']
                    ];

                    array_push($users, $user);

                    setcookie('users', json_encode($users), time() + 3600, '/');

                    header('location: login.php');
                } else {
                    echo "Passwords do not match...";
                }
            } else {
                echo "Invalid email...";
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid username...";
    }
}
