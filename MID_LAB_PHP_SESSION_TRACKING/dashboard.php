<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {

?>

        <html>

        <head>
            <title>Dashboard</title>
        </head>

        <body>
            <table border="1" width="100%" height="100%" align="center">
                <tr>
                    <td height="20%" colspan="2">
                        <?php require('./nav.php') ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form method="GET" action="#">
                            <ul>
                                <li>
                                    <input type="submit" name="dashboard" value="Dashboard">
                                </li>
                                <li>
                                    <input type="submit" name="profile" value="Profile">
                                </li>
                                <li>
                                    <input type="submit" name="edit" value="Edit Profile">
                                </li>
                                <li>
                                    <input type="submit" name="changeProPic" value="Change Profile Picture">
                                </li>
                                <li>
                                    <input type="submit" name="changePassword" value="Change Password">
                                </li>
                                <li>
                                    <input type="submit" name="logout" value="Logout">
                                </li>
                            </ul>

                        </form>
                    </td>
                    <td align="center">
                        <?php
                        if (isset($_REQUEST['dashboard'])) {
                            require('DashboardViews/dashboard.php');
                        }
                        if (isset($_REQUEST['profile'])) {
                            require('DashboardViews/profile.php');
                        }
                        if (isset($_REQUEST['edit'])) {
                            require('DashboardViews/editProfile.php');
                        }
                        if (isset($_REQUEST['changeProPic'])) {
                            require('DashboardViews/changeProfilePic.php');
                        }
                        if (isset($_REQUEST['changePassword'])) {
                            require('DashboardViews/changePassword.php');
                        }
                        if (isset($_REQUEST['logout'])) {
                            setcookie('isLoggedIn', 'false', time() + 3600, '/');
                            setcookie('authUser', 'null', time() - 10, '/');
                            header('location: login.php');
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td height="10%" align="center" colspan="2">
                        <h4>
                            Copyright 2017
                        </h4>
                    </td>
                </tr>
            </table>
        </body>

        </html>

<?php

    } else {
        header('location: login.php');
    }
} else {
    setcookie('isLoggedIn', 'false', time() + 999999, '/');
    header('location: index.php');
}
?>