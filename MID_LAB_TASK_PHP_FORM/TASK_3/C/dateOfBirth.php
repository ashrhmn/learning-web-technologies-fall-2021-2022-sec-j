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
                        <input size="2" type="text" name="day" value="<?php
                                                                        if (isset($_REQUEST['submit'])) {
                                                                            $day = $_REQUEST['day'];

                                                                            if ($day != " ") {
                                                                                echo $day;
                                                                            }
                                                                        }
                                                                        ?>"> /
                    </td>
                    <td>
                        <input size="2" type="text" name="month" value="<?php
                                                                        if (isset($_REQUEST['submit'])) {
                                                                            $month = $_REQUEST['month'];
                                                                            if ($month != "") {
                                                                                echo $month;
                                                                            }
                                                                        }

                                                                        ?>"> /
                    </td>
                    <td>
                        <input size="4" type="text" name="year" value="<?php


                                                                        if (isset($_REQUEST['submit'])) {
                                                                            $year = $_REQUEST['year'];

                                                                            if ($year != "") {
                                                                                echo $year;
                                                                            }
                                                                        }

                                                                        ?>">
                    </td>
                </tr>
            </table>
            <hr />
            <input name="submit" type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>