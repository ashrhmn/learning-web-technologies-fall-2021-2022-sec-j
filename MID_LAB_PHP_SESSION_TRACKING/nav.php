<html>

<body>
    <table width="100%">
        <tr>
            <td>Logo</td>
            <td align="right">

                <a href="index.php">Home</a>
                <?php
                if (isset($_COOKIE['isLoggedIn'])) {
                    if ($_COOKIE['isLoggedIn'] == 'true') {
                ?>
                        <a href="dashboard.php">Dashboard</a>
                        <form action="logoutHandler.php" method="POST">
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