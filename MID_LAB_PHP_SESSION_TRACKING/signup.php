<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
        header('location: dashboard.php');
    } else {

?>
        <html>

        <body>
            <table border="1" width="100%" height="100%">
                <tr>
                    <td height="20%">

                        <?php
                        require('./nav.php')
                        ?>
                    </td>
                </tr>
                <tr>
                    <td align="center" width="50%">

                        <fieldset>
                            <legend>REGISTRATION</legend>
                            <form method="POST" action="signUpHandler.php">
                                <table align="center">
                                    <tr>
                                        <td>
                                            <label for="name">Name</label>
                                        </td>
                                        <td>
                                            : <input type="text" name="name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="email">Email</label>
                                        </td>
                                        <td>
                                            : <input type="text" name="email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="username">Username</label>
                                        </td>
                                        <td>
                                            : <input type="text" name="username">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="password">Password</label>
                                        </td>
                                        <td>
                                            : <input type="password" name="password">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="confirmPassword">Confirm Password</label>
                                        </td>
                                        <td>
                                            : <input type="password" name="confirmPassword">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="submit" name="submit" Value="Sign Up">
                                        </td>
                                        <td align="center">
                                            <button><a href="login.php">Login</a></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td height="10%">
                        <h4>
                            Copyright 2017
                        </h4>
                    </td>
                </tr>
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