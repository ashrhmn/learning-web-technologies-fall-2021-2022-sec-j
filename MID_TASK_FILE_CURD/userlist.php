<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>

<body>

	<center>
		<a href="home.php">Back </a> |
		<a href="logout.php">logout </a>
	</center>

	<br>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		<?php
		$myfile = fopen('user.txt', 'r');
		$counter = 0;

		while (!feof($myfile)) {
			$data = fgets($myfile);
			if($data!=""){
				$user = explode('|', $data);
	
				echo '<tr>
					<td>' . ++$counter . '</td>
					<td>' . $user[0] . '</td>
					<td>' . $user[1] . '</td>
					<td>' . $user[2] . '</td>
					<td>
						<a href="edit.php?id='.$counter.'"> EDIT</a> |
						<a href="delete.php?id='.$counter.'"> DELETE</a>
					</td>
				</tr>';
			}
		}
		fclose($myfile);
		?>
	</table>
</body>

</html>