<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
	if ($_POST['username'] != "") {
		if ($_POST['password'] != "") {
			if ($_POST['email'] != "") {

				$myfile = fopen('user.txt', 'a');
				$user = $_POST['username'] . "|" . $_POST['password'] . "|" . $_POST['email'] . "\r\n";

				fwrite($myfile, $user);
				fclose($myfile);

				echo $user;

				header('location: login.html');
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
