<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Games</title>
</head>
<body>
	<h1>Games!!!!</h1>
	<a href="/games">Home</a><br><br>
	<div>
		<form method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>Game Name:<input type="text" name="name" placeholder="Name"></label><br><br>
			<label>Year:<input type="number" name="year" placeholder="Year"></label><br><br>
			<button>Add New</button>
		</form>
	</div>

</body>
</html>