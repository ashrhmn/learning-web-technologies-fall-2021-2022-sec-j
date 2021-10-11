<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
        header('location: dashboard.php');
    } else {

?>

        <html>

        <body>
            <?php
            require('./nav.html')
            ?>
            <form action="POST">
                <h1>Login to cont</h1>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Login">
            </form>
            <button><a href="signup.php">Sign Up</a></button>
        </body>

        </html>

<?php

    }
} else {
    setcookie('isLoggedIn', 'false', time() + 999999, '/');
    header('location: home.php');
}
?>