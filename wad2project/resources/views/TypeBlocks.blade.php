<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		{{$type->type_name}}
	</title>
</head>
<body>
<div class="body">
			<header class="header">
			Mineclopedia
		</header>

		<table class="table blocked"> 
			<tr>
				<th>
				{{$type->type_name}}
				</th>
			</tr>
						@foreach($blocks as $block)

			<tr>
				<td>
					<a href="thisblock/{{$block->id}}">{{$block->block_name}}</a>
				</td>
				<td>
						
				</td>
			</tr>
						@endforeach
		</table>
				
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
.table
{	
	font-size:3vw;
	border-style: solid;
	border-color: #ffffff;
	margin-left: 25vw;
	margin-top: 2vw;
	text-shadow: 1px 2px 1px #00ff00;
}
.image
{
	width: 5vw;
	height: 3vw;
}
.blocked
{
font-family: blocked;
}
.td
{
	text-align: left;
}
</style>