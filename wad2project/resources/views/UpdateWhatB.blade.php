<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>UpdateBlock</title>
</head>
<body>
<div class="body">

		<header class="header">
			Mineclopedia admin
		</header>
@foreach($blocks as $block)
<table class="table blocked">
	<tr>
		<td>
			Block Name
		</td>
		<td>
			Update 
		</td>
	</tr>
	<tr>
		<td>
			{{$block->block_name}}
		</td>
		<td>
			<a href="UpdateThisB/{{$block->id}}"><button class="button2">Update This</button></a>
		</td>
	</tr>
</table>


@endforeach
</div>
</body>
</html>