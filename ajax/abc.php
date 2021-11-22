<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
$name = $_REQUEST['name'];

echo $name;
$db = new mysqli('ashrhmn.com', 'webtech', 'webtech', 'webtech');
//
if ($db->connect_error) {
	echo 'Conn error';
	return;
}
print_r($db);
echo 'Conn succ';
$db->query("select * from users");
echo 'hh';
$res = $db->query("select name from users")->fetch_all(MYSQLI_ASSOC);
print_r($res);

