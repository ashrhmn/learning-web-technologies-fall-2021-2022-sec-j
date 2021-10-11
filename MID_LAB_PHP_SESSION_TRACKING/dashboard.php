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
                    <td>Account</td>
                    <td>Details</td>
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