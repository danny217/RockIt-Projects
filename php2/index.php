<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300|Lobster' rel='stylesheet' type='text/css'>
</head>
<body> 
	<?php
		require_once('header.php');
	?>
	<div class="mainBox"> 
		<div class="mainText">
		Welcome to our shopping cart
		</div>
		<div class="mainPText">
		Do you want to see our list of <a href="browse.php"> products</a> 
		</div>
	</div>
	<div>
		<?php
			require_once('footer.php');
		?>
	</div>
</body> 
</html>
