<html>

<head>
    <title>Gender</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
        </fieldset>
        <br />
        <input type="submit" name="submit" value="Submit">
        <p>
            <?php
            if (isset($_REQUEST['submit'])) {
                if (isset(($_REQUEST['gender']))) {
                    echo  $_REQUEST['gender'] . ' is selected';
                } else {
                    echo 'At least one of them must be selected';
                }
            }
            ?>
        </p>
    </form>
</body>

</html>