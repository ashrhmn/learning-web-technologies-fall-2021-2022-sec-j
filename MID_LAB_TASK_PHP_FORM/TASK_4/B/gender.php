<?php
if (isset($_REQUEST['submit'])) {
    $gender = $_REQUEST['gender'];
    if ($gender != "") {
        echo $gender . ' is selected';
    } else {
        echo 'Invalid Input';
    }
}
?>

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
    </form>
</body>

</html>