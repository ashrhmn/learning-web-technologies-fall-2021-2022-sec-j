<html>

<head>
    <title>Gender</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male" <?php
if (isset($_REQUEST['submit'])) {
    if ($_REQUEST['gender'] == "Male") {
        echo 'checked';
    } else {
        echo '';
    }
}
?>>Male
            <input type="radio" name="gender" value="Female" <?php
if (isset($_REQUEST['submit'])) {
    if ($_REQUEST['gender'] == "Female") {
        echo 'checked';
    } else {
        echo '';
    }
}
?>>Female
            <input type="radio" name="gender" value="Other <?php
if (isset($_REQUEST['submit'])) {
    if ($_REQUEST['gender'] == "Other") {
        echo 'checked';
    } else {
        echo '';
    }
}
?>">Other
        </fieldset>
        <br />
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>