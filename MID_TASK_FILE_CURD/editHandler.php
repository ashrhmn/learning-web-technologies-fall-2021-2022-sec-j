<?php
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    if ($_POST['username'] != "") {
        if ($_POST['password'] != "") {
            if ($_POST['email'] != "") {

                if (copy('user.txt', 'userBac.txt') != 1) {
                    echo 'Error backing up';
                    return;
                }

                $myfile = fopen("user.txt", 'w');
                $mybacfile = fopen("userBac.txt", "r");
                $counter = 0;

                while (!feof($mybacfile)) {
                    $data = fgets($mybacfile);
                    if ($data != "") {
                        if (++$counter == $id) {
                            fwrite($myfile, $_POST['username'] . "|" . $_POST['password'] . "|" . $_POST['email']);
                            // echo $_POST['username'] . "|" . $_POST['password'] . "|" . $_POST['email'];
                        } else {
                            $user = explode('|', $data);
                            fwrite($myfile, $user[0] . '|' . $user[1] . '|' . $user[2]);
                            // echo $user[0] . '|' . $user[1] . '|' . $user[2];
                        }
                    }
                }

                header('location: userlist.php');
            } else {
                echo "Invalid email...";
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid username...";
    }
}
