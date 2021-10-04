<?php


    if(isset($_REQUEST['submit'])){
        $day = $_REQUEST['day'];
        $month = $_REQUEST['month'];
        $year = $_REQUEST['year'];

        $date = $day.'/'.$month.'/'.$year;

        if($day!="" && $month!="" && $year!=""){
            echo $date;
        }
        else{
            echo 'Invalid Date...';
        }
    }

?>

    <html>

    <head>
        <title>Date Of Birth</title>
    </head>

    <body>
        <form method="get" action="#">
            <fieldset>
                <section>Date Of Birth</section>
                <table>
                    <tr>
                        <td align="center">dd</td>
                        <td align="center">mm</td>
                        <td align="center">yyyy</td>
                    </tr>
                    <tr>
                        <td>
                            <input size="2" type="text" name="day"> /
                        </td>
                        <td>
                            <input size="2" type="text" name="month"> /
                        </td>
                        <td>
                            <input size="4" type="text" name="year">
                        </td>
                    </tr>
                </table>
                <hr/>
                <input name="submit" type="submit" value="Submit">
            </fieldset>
        </form>
    </body>

    </html>