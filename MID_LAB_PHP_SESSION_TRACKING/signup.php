<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
        header('location: dashboard.php');
    } else {

?>

        <html>

        <body>

            <form action="POST">
                <h1>Sign Up</h1>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="password" placeholder="Password">
                <input type="text" name="confirmPassword" placeholder="Confirm Password">
                <input type="submit" name="submit" Value="Sign Up">
            </form>
            <button><a href="login.php">Login</a></button>
        </body>

        </html>

<?php
    }
} else {
    setcookie('isLoggedIn', 'false', time() + 999999, '/');
    header('location: home.php');
}
?>