<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>Mineclopedia</title>
</head>
<body>
	<div class="body">
		<header class="header">
			Mineclopedia
		</header>

		<div>



		@foreach($types as $type)
		<table>
			<tr>
				<td hidden>
					{{$type->id}}
				</td>
				<td>
					<a href="blocks/{{$type->id}}"><button class="button4">{{$type->type_name}}</button></a>
				</td>
			</tr>
			@endforeach
		</table>	

	</div>

</body>
</html>