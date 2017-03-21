<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">


	<title>UpdateWhat</title>
</head>
<body>
<div class="body">
		<header class="header">
			Mineclopedia admin
		</header>
<table class="table blocked">
	<tr>
		<td>
				<div hidden>id</div>
		</td>
		<td>
			<div>Type name</div>
		</td>
				
		<td>
				<div>Update</div>
		</td>
	</tr>

	@foreach($types as $type)
		<tr>
		<td>
				<div hidden>{{$type->id}}</div>
		</td>
		<td>
				<div class="font-size border">{{$type->type_name}}</div>
		</td>
		<td>
				<a href="UpdateThis/{{$type->id}}"><button class="button2">UpdateThis</button></a>
	</tr>
	@endforeach
</table>











</div>
</body>
</html>