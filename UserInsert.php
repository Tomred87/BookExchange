<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include("Connect_Database.php")
?>
<?php

$userInsert = "insert into users values (null, '" .
				$_POST["name"] .
				"', '" . 
				$_POST["email"] .
				"','" . 
				$_POST["cin"] . 
				"', null, 'images/defaultprofile.jpg');";

$result = mysqli_query($connect, $userInsert);
	header("Location: login.php");
?>
</body>
</html>