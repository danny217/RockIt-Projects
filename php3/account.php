<?php
session_start();


$username = $_SESSION["username"];

if(!isset($username)){

	header("Location: index.php");
	exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Londrina+Sketch|Bangers' rel='stylesheet'>
</head>
<body>
	<header class="header">
      <nav>
        <ul class="menu">
          <li>
            <a class="neon" href="#"><span class="broken">Wel</span>come,</a>
          </li>
          <li>
            <a class="neon" href="#"><span class="broken"> <?= $username ?></span>, To</a>
          </li>
          <li>
            <a class="neon" href="#">Your <span class="broken"> Pag</span>e!</a>
          </li>
        </ul>
      </nav>
    </header>
	<a href="logout.php"><button>Logout</button></a>
</body>
</html>