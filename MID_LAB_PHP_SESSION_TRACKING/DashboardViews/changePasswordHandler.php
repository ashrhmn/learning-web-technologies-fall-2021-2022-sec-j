<?php
session_start();
if (isset($_POST['submit'])) {
    if ($_POST['newPassword'] == $_POST['confirmNewPassword']) {
        $username = $_COOKIE['authUser'];
        $users = json_decode($_COOKIE['users'], true);
        $count = count($users);
        for ($i = 0; $i < $count; ++$i) {
            if ($users[$i]['username'] == $username && $users[$i]['password'] == $_POST['currentPassword']) {
                $users[$i]['password'] = $_POST['newPassword'];
                break;
            }
        }
        setcookie('users', json_encode($users), time() + 3600, '/');
        echo 'Updated Successfully';
        header('location: ../dashboard.php');
        return;
    } else {
        echo 'Passwords Do Not Match';
    }
}
