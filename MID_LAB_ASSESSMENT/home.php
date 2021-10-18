<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') { ?>

        <html>

        <body>
            <h1>Homepage</h1>
            <a href="handleLogout.php">Logout</a>
        </body>

        </html>

<?php } else { //header('location: login.php');}}
    }
} else {
    header('location: login.php');
}
?>