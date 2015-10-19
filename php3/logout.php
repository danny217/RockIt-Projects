<?php

session_start();

$message = "You are logged out!";

header('Refresh: 3;index.php');


session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
</head>
<body>
	<p><?php echo $message; ?></p>
	<p>Laters!</p>
</body>
</html>