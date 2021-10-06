<?php
session_start();

function isCredCorrect($username, $password)
{
	$users = $_SESSION['users'];
	$numOfUsers = count($users);

	for ($i = 0; $i < $numOfUsers; ++$i) {
		if ($users[$i]['username'] == $username && $users[$i]['password'] == $password) {
			echo 'here';
			return true;
		}
		echo 'there';
		echo $users[$i].'    '.$username.'   '.$password;
	}
	return false;
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username != "") {
		if ($password != "") {

			if (isCredCorrect($username, $password)) {
				$_SESSION['flag'] = "true";
				header('location: home.php');
			} else {
				echo "invalid username/password";
			}
			// if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
			// 	$_SESSION['flag'] = "true";
			// 	header('location: home.php');
			// }else{
			// 	echo "invalid username/password";
			// }
		} else {
			echo "Invalid password...";
		}
	} else {
		echo "Invalid username...";
	}
}
