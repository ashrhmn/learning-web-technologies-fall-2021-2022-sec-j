<html>

<head>
    <title>Degree</title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degreeSsc" value="SSC"> SSC
            <input type="checkbox" name="degreeHsc" value="HSC"> HSC
            <input type="checkbox" name="degreeBsc" value="BSc"> BSc
            <input type="checkbox" name="degreeMsc" value="MSc"> MSc
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
        <p>
            <?php
            if (isset($_REQUEST['submit'])) {
                $selectedCOunt = 0;
                $selectedCOunt += isset($_REQUEST['degreeSsc'])?1:0;
                $selectedCOunt += isset($_REQUEST['degreeHsc'])?1:0;
                $selectedCOunt += isset($_REQUEST['degreeBsc'])?1:0;
                $selectedCOunt += isset($_REQUEST['degreeMsc'])?1:0;
                
                if($selectedCOunt<2){
                    echo 'At least two must be selected';
                    return;
                }
                echo 'Submitted';
            }
            ?>

        </p>
    </form>
</body>

</html>