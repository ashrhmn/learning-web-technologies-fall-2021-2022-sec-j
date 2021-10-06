<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){
					$users = $_SESSION['users'];
					if(!$users){
						$users = array();
						$_SESSION['users'] = $users;
					}
					$user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					array_push($users,$user);
					
					$_SESSION['users'] = $users;
					header('location: login.html');
				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>