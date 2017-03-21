<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>DeleteWhatB</title>
</head>
<body>
<div class="body">
<header class="header">
			Mineclopedia admin
		</header>
	<table class="table blocked">
		<tr>
			<td class="padding">
				Block Name
			</td>
			<td>
				Delete
			</td>
		</tr>
		@foreach($blocks as $block)
		<tr>

			<td>
			<div>
				{{$block->block_name}}
			</div>

			</td>
			<td>
				<a href="/DeleteThisB/{{$block->id}}"><button class="button2">Delete</button></a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</body>
</html>