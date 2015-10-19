<?php
	require_once("product.php");

$options = "";


foreach($products as $key => $product){
	$options .= "<option value='" . $key . "'>" . $product . "</option>\n";
}
?>

<!DOCTYPE html>
<html lang="en-US">
	
<head>
	<meta charset="UTF-8">
	<title>Browse</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300|Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
		require_once('header.php');
	?>
	<div class="mainBox">
		<div class="mainText">Browse Products</div>
		<div class="browseList">
		<form method="get" action="view.php">
			<label for="Prod_id" class="labelTextP">Product: </label>
				<select class="dropList" name="Prod_id" id="Prod_id" value="Prod_id"><?= $options ?></select>			
			<label for="quantity" class="labelTextQ">Quantity: </label>
				<input type="number" name="quantity" id="quantity" value="quantity">			
			<input class="button" type="submit" value="Submit"></input>
		</form>
		</div>
	</div>
	<?php
		require_once('footer.php');
	?>
</body>
</html>
