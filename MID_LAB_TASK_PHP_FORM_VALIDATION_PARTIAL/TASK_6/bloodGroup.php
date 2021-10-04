<html>

<head>
    <title>Blood Group</title>
</head>

<body>
    <form method="get" action="#">
        Blood Group
        <select name="bloodGroup">
            <option disabled selected value> -- </option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <hr>
        <input type="submit" name="submit" value="Submit">
        <p>
            <?php
            if (isset($_REQUEST['submit'])) {
                if(isset($_REQUEST['bloodGroup'])){
                    $bloodGroup = $_REQUEST['bloodGroup'];
                    echo $bloodGroup . ' is selected';
                }
                else{
                    echo 'An option must be selected';
                }
            }
            ?>
        </p>
    </form>
</body>

</html>