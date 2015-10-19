<?php
	require_once('product.php');

$msg = "This product does not exist";
$id = "";
$quantity = "";
$prod = "";

if(isset($_GET["quantity"])){
	if(is_numeric($_GET["quantity"])){
		$quantity = $_GET["quantity"];
	} 
}


if(isset($_GET["Prod_id"])){
	if(is_numeric($_GET["Prod_id"])){
		$id = $_GET["Prod_id"];
	} 
}

if(array_key_exists($id, $products)){
	$msg = "Your order includes $quantity $products[$id]";
	if($id == 1){
		if($quantity >= 8){
			$msg = "You can't order over 7 Mac";
		}
	}
}

if($quantity <= 0 || $quantity == ""){
	$msg = "invalid amount";
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300|Lobster' rel='stylesheet' type='text/css'>
	<title>Products</title>
</head>
<body>
	<?php
		require_once('header.php');
	?>
	<div class="mainBox">
			<p class="mainTextView">
				<?php 
				 	echo $msg;
				 ?>
			</p>

	
	</div>
	<?php
		require_once('footer.php');
	?>
</body>
</html>