<?php
$id = $_GET['id'];
if (rename('user.txt', 'userBac.txt') != 1) {
	echo 'Error backing up';
	return;
}
$myBacfile = fopen('userBac.txt', 'r');
$myfile = fopen('user.txt', 'w');
$counter = 0;

while (!feof($myBacfile)) {
	$data = fgets($myBacfile);
	if ($data != "") {
		$user = explode('|', $data);

		if (++$counter != $id) {
			$userData = $user[0] . '|' . $user[1] . '|' . $user[2];
			fwrite($myfile, $userData);
		}
	}
}

header('location: userlist.php');

fclose($myfile);
fclose($myBacfile);
$myBacfile = fopen('userBac.txt','w');
fwrite($myBacfile,"");
fclose($myBacfile);
?>
