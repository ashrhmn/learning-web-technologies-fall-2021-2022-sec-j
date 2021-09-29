<html>

<head>
    <title>Blood Group</title>
</head>

<body>
    <form method="get" action="#">
        Blood Group
        <select name="bloodGroup">
            <option value="A+" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "A+") ? 'selected' : '') : '' ?>>A+</option>
            <option value="A-" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "A-") ? 'selected' : '') : '' ?>>A-</option>
            <option value="B+" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "B+") ? 'selected' : '') : '' ?>>B+</option>
            <option value="B-" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "B-") ? 'selected' : '') : '' ?>>B-</option>
            <option value="O+" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "O+") ? 'selected' : '') : '' ?>>O+</option>
            <option value="O-" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "O-") ? 'selected' : '') : '' ?>>O-</option>
            <option value="AB+" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "AB+") ? 'selected' : '') : '' ?>>AB+</option>
            <option value="AB-" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['bloodGroup'] == "AB-") ? 'selected' : '') : '' ?>>AB-</option>
        </select>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>