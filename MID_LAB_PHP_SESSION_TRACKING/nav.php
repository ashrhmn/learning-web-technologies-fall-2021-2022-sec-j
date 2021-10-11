<html>

<body>
    <table width="100%">
        <tr>
            <td align="left"><a href="index.php">Logo</a></td>
            <td align="right">
                <?php
                if (isset($_COOKIE['isLoggedIn'])) {
                    if ($_COOKIE['isLoggedIn'] == 'true') {
                ?>
                        <form action="logoutHandler.php" method="POST">
                            <p>
                                Logged in as
                                <a href="dashboard.php"><?php echo $_COOKIE['authUser'] ?></a>
                            </p>
                            <input type="submit" name="logout" value="Logout">
                        </form>
                    <?php
                    } else {
                    ?>
                        <a href="login.php">Login</a>
                        <a href="signup.php">Signup</a>

                <?php
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>