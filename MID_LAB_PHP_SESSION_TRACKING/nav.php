<html>

<body>
    <a href="index.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="login.php">Login</a>
    <a href="signup.php">Signup</a>
    <?php
    if (isset($_COOKIE['isLoggedIn'])) {
        if ($_COOKIE['isLoggedIn'] == 'true') {
    ?>
            <form action="logoutHandler.php" method="POST">
                <input type="submit" name="logout" value="Logout">
            </form>
    <?php
        }
    }
    ?>
</body>

</html>