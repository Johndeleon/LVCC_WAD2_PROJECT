<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>NewBlock</title>
</head>
<body>
<div class="body">
<header class="header">
			Mineclopedia admin
		</header>
	<form method="post" action="CreateBlock">
{{csrf_field()}}

<table class="table">
	<tr>
		<td>
			Type Id:</td>
			<td>
				<select name="type_id" class="textbox" required>
				@foreach($types as $type)
					<option>{{$type->id}}</option>
				@endforeach
				</select>
			</td>
		</td>
	</tr>
	<tr>
		<td>
			Block Name:<td><input type="text" name="block_name" class="textbox" required></td>
		</td>
	</tr>
	<tr>
			<td>
			Transparency:<td><input type="text" name="transparency" class="textbox" required></td>
		</td>
	</tr>
	<td>
			Luminance:<td><input type="text" name="luminance" class="textbox" required></td>
		</td>
	</tr>
	<tr>
	<td>
			Blast Resistance:<td><input type="number" name="blast_resistance" class="textbox" required></td>
		</td>
	</tr>
	<tr>
	<td>
			Renewable:<td><input type="text" name="renewable" class="textbox" required></td>
		</td>
		</tr>
		<tr>
	<td>
			Stackable:<td><input type="text" name="stackable" class="textbox" required></td>
		</td>
	
	</tr>
			<tr>
	<td>
			Flammable:<td><input type="text" name="flammable" class="textbox" required></td>
		</td>
	
	</tr>
			<tr>
	<td>
			Drops:<td><input type="text" name="drops" class="textbox" required></td>
		</td>
	
	</tr>
				<tr>
	<td>
			Description<td><input type="text" name="description" class="textbox" required></td>
		</td>
	
	</tr>


</table>



<button class="button margin3 blocked">Create Block!</button>
</form>
</div>
</body>
</html>