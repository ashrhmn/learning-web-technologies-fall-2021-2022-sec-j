<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
        header('location: dashboard.php');
    } else {

?>
        <html>

        <body>
            <table border="1" width="50%" align="center" height="100%">
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
                                            : <input type="email" name="email">
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
                                </table>
                                <fieldset>
                                    <legend>Gender</legend>
                                    <input type="radio" name="gender" value="Male" checked>Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Other">Other
                                </fieldset>
                                <fieldset>
                                    <legend>Date Of Birth</legend>
                                    <table>
                                        <tr>
                                            <td align="center">dd</td>
                                            <td align="center">mm</td>
                                            <td align="center">yyyy</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input name="day" value="1" type="number" min="1" max="31" step="1" size="2" type="text"> /
                                            </td>
                                            <td>
                                                <input name="month" value="1" type="number" min="1" max="12" step="1" size="2" type="text"> /
                                            </td>
                                            <td>
                                                <input name="year" value="2000" type="number" min="1960" max="2021" step="1" size="4" type="text">
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <hr />
                                <input type="submit" name="submit" Value="Sign Up">
                                <!-- <button><a href="login.php">Login</a></button> -->
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