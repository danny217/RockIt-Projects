<?php

session_start();

require("classes/initialize.php");

$msg = "";
$error = "";

if(isset($_SESSION["username"]) && strlen($_SESSION["username"])){
	//user is logged in
	header("Location: account.php");
	exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
	$password = $_POST["password"];
	$usernameValidator = new UsernameValidator;
	$passwordValidator = new PasswordValidator;

	if(empty($errors))
	{
		$errors= [];
	}
	if(!$usernameValidator->isValid($username) && !$passwordValidator->isValid($password))
	{	
		$error = "Invalid username and password";
		array_push($errors,$error);
		
	}elseif(!$usernameValidator->isValid($username))
	{
		$error = "Invalid username";
		array_push($errors,$error);

	}elseif(!$passwordValidator->isValid($password))
	{
    	$error = "Invalid password";
    	array_push($errors,$error);

	}else
	{
		$login = new LogThemIn;
		$login->login($username);
	}
	
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(count($errors) > 0)
		{
			$msg = end($errors);
			print_r($errors);
		}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
</head>
<body>
	<form action="index.php" method="post">
		
		<div>
			<label>Username: 
				<div><input type="text" name="username" required></div>
			</label>
		</div>
		
		<div>
			<label>Password: 
				<div><input type="password" name="password" required></div>		
			</label>
		</div>

		<button>Submit</button>
		<div class="error"><?php echo $msg; ?></div>
	</form>
</body>
</html>
