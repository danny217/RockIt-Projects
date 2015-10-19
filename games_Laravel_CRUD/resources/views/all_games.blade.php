<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Games</title>
</head>
<body>
	<h1>Games!!!!</h1>
	<table>
	<div>
		<tr>
			<th> Id </th>
			<th> Game Name </th>
			<th> Year </th>
			<th> Edit </th>
			<th> Delete </th>
		</tr>
	</div>
	<div>
		@foreach($games as $game)
		<tr>
			<td>{{$game->id}}</td>
			<td><a href="games/{{$game->id}}">{{$game->name}}</a></td>
			<td>{{$game->year}}</td>
			<td><a href="/games/{{$game->id}}/edit">Edit</a></td>
			<td><a href="games/{{$game->id}}/delete">Delete</a></td>
		</tr>
		@endforeach
		<a href="/games">Home</a><br><br>
		<a href="games/create">New Game</a><br><br>
	</div>
	</table>
</body>
</html>