<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>check tutorial</title>
</head>
<body>
	<ul>
		@auth
		@foreach($socialLink as $key => $value)
		<li>
			<a href="{{$value}}">{{$key}}</a><br>
		</li>
		@endforeach
		@endauth
	</ul>
</body>
</html>
