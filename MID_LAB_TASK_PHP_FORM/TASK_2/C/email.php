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
			<input type="text" name="email" value="<?php
													if (isset($_REQUEST['submit'])) {
														$email = $_REQUEST['email'];
														if ($email == "") {
															echo "null value...";
														} else {
															echo $email;
														}
													}
													?>">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>

</html>