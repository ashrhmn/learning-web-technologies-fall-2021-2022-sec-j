<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
?>
        <form action="handleChangePassword.php" method="post">

        </form>
<?php
    } else {
        header('location: login.php');
    }
} else {
    header('location: login.php');
}
?>