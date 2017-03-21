<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>UpdateBlockForm</title>
</head>
<body>
<div class="body">
		<header class="header">
			Mineclopedia admin
		</header>
	<form method="post" action="/UpdateNowB">
{{csrf_field()}}

<table class="table">
	<tr>
	<td hidden>
	<div>
				<input type="text" name="id" value="{{$block->id}}">
	</div>
	</td>
	</tr>
	<tr>
		<td>
			Type Id:</td>
			<td>
				<select name="type_id">
				@foreach($types as $type)
					<option>{{$type->id}}</option>
				@endforeach
				</select>
			</td>
		</td>
	</tr>
	<tr>
		<td>
			Block Name:<td><input type="text" name="block_name" value="{{$block->block_name}}" required></td>
		</td>
	</tr>
	<tr>
			<td>
			Transparency:<td><input type="text" name="transparency" value="{{$block->transparency}}" required></td>
		</td>
	</tr>
	<td>
			Luminance:<td><input type="text" name="luminance" value="{{$block->luminance}}" required></td>
		</td>
	</tr>
	<tr>
	<td>
			Blast Resistance:<td><input type="number" name="blast_resistance" value="{{$block->blast_resistance}}" required></td>
		</td>
	</tr>
	<tr>
	<td>
			Renewable:<td><input type="text" name="renewable" value="{{$block->renewable}}" required></td>
		</td>
		</tr>
		<tr>
	<td>
			Stackable:<td><input type="text" name="stackable" value="{{$block->stackable}}" required></td>
		</td>
	
	</tr>
			<tr>
	<td>
			Flammable:<td><input type="text" name="flammable" value="{{$block->flammable}}" required></td>
		</td>
	
	</tr>
			<tr>
	<td>
			Drops:<td><input type="text" name="drops" value="{{$block->drops}}" required></td>
		</td>
	
	</tr>
		</tr>
			<tr>
	<td>
			Description:<td><input type="text" name="description" value="{{$block->description}}" required></td>
		</td>
	
	</tr>


</table>



<button class="blocked margin3 button">Update Block!</button>
</form>
</div>
</body>
</html>


<style type="text/css">
	.header{
	background-color: #33691E;
	color: white;	
	text-shadow: 5px 3px 3px  #00ff00;
	font-family: Minecrafter Alt;
	text-align: center;
	font-size: 7vw;
	border-style: solid;
	border-top: none;
	border-left: none;
	border-right: none;
	border-bottom-color: #00ff00;
	padding: 5px;


}

.body
{
	background-color: #9CCC65;
	min-height: 692px;
	margin: -8px;
	max-width: 1366px;
}
.blocked
{
	font-family: Blocked;
}
.table
{	
	font-size:3vw;
	border-style: solid;
	border-color: #ffffff;
	margin-left: 25vw;
	margin-top: 2vw;
	text-shadow: 1px 2px 1px #00ff00;
}
.textbox
{
	width: 20vw;
	height: 2vw;
}


.button
{
	font-size: 2vw;

margin-top: 5vw;
width: 14vw;
height: 7vw;
background-color: #00ff00;
color: #000000;
border-style: none;
	box-shadow: 5px 5px 1px  #66cc00;
			text-shadow: 1px 1px 1px #000000;
}.margin3
{
	margin-top: 1vw;
	margin-left: 25vw;
}
</style>