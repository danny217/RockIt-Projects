<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Games</title>
</head>
<body>
	<h1>Edit Game!!!!</h1>
	<a href="/games">Home</a><br><br>
	<div>
		<form method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>Game Name:<input type="text" name="name" value="{{$game->name}}"></label><br><br>
			<label>Year:<input type="number" name="year" value="{{$game->year}}"></label><br><br>
			<button>Submit Edit</button>
		</form>
	</div>

</body>
</html>