<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
        header('location: dashboard.php');
    } else {

?>

        <html>

        <body>
            <table border="1" align="center" width="70%">
                <tr>
                    <td>
                        <?php
                        require('./nav.php')
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>

                        <fieldset>
                            <legend>LOGIN</legend>
                            <form method="POST" action="loginHandler.php">
                                <table align="center">
                                    <tr>
                                        <td>Username</td>
                                        <td>
                                            : <input type="text" name="username">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>
                                            : <input type="password" name="password">
                                        </td>
                                    </tr>
                                </table>
                                <input type="checkbox" name="rememberMe" id="">
                                <label for="rememberMe">Remember Me</label><br>
                                <input type="submit" name="submit" value="Login">
                                <a href="forgotPassword.php">Forgot Password?</a>
                            </form>
                        </fieldset>
                    </td>
                </tr>
                <?php require('footer.html') ?>
            </table>
        </body>
        </html>
<?php

    }
} else {
    setcookie('isLoggedIn', 'false', time() + 999999, '/');
    header('location: index.php');
}
?>