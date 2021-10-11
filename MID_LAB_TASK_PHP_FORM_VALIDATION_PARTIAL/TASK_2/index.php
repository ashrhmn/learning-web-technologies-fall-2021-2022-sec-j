<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Email Field </title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>Email</legend>
            <input type="text" name="email" value="">
            <hr>
            <input type="submit" name="submit" value="Submit">
            <p>
                <?php


                function isValidEmail($email)
                {
                    $indexOfA = -1;
                    $indexOfDot = -1;
                    for ($i = 0; $i < strlen($email); ++$i) {
                        if ($email[$i] == '@') {
                            $indexOfA = $i;
                        }
                        if ($email[$i] == '.') {
                            $indexOfDot = $i;
                        }
                    }

                    if ($indexOfA == -1 || $indexOfDot == -1) {
                        return false;
                    }

                    if ($indexOfA < 1 || $indexOfDot == strlen($email) - 1 || $indexOfDot - $indexOfA < 2) {
                        return false;
                    }
                    return true;
                }

                if (isset($_REQUEST['submit'])) {
                    $email = $_REQUEST['email'];
                    if ($email == "") {
                        echo "Email can not be empty";
                        return;
                    }

                    if(!isValidEmail($email)){
                        echo $email.' is not valid';
                        return;
                    }

                    echo $email.' submitted successfully';
                }
                ?>
            </p>
        </fieldset>
    </form>
</body>

</html>