<html>

<head>
    <title>Degree</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degreeSsc" value="SSC" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['degreeSsc'] == "SSC") ? 'checked' : '') : '' ?>> SSC
            <input type="checkbox" name="degreeHsc" value="HSC" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['degreeHsc'] == "HSC") ? 'checked' : '') : '' ?>> HSC
            <input type="checkbox" name="degreeBsc" value="BSc" <?php echo (isset($_REQUEST['submit'])) ? (($_REQUEST['degreeBsc'] == "BSc") ? 'checked' : '') : '' ?>> BSc
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>