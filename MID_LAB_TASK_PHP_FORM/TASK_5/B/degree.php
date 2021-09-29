<?php

    if(isset($_REQUEST['submit'])){
        $degree = array($_REQUEST['degreeSsc'],$_REQUEST['degreeHsc'],$_REQUEST['degreeBsc']);
        foreach($degree as $d){
            if($d!=""){
                echo $d.' ';
            }
        }
        echo ' selected';
    }
?>
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
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>