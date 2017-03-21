<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>DeleteWhat</title>
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
			<div>type name</div>
		</td>
				
		<td>
				<div>Delete This</div>
		</td>
	</tr>

	@foreach($types as $type)
		<tr>
		<td>
				<div hidden>{{$type->id}}</div>
		</td>
		<td>
				<div>{{$type->type_name}}</div>
		</td>
		<td>
				<div><a href="DeleteThis/{{$type->id}}"><button class="button2">Delete This</button></a></div>
		</td>
	</tr>
	@endforeach
</table>


</div>
</body>
</html>