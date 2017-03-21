<!DOCTYPE html>
<html>
<head>
	<title>{{$block->block_name}}</title>
</head>
<body>
<div class="body">
		<header class="header">
			Mineclopedia
		</header>
<div class="header2 blocked">
	{{$block->block_name}}
</div>

<div>
<table class="table0">
	<tr>
		<td>
			<table class="table">
		<tr>
			<td>
				Block Name: 
			</td>
			<td class="margin">
				{{$block->block_name}}
			</td>
		</tr>
		<tr>
			<td>
				Transparency: 
			</td>
			<td class="margin">
				{{$block->transparency}}
			</td>
		</tr>
		<tr>
			<td>
				Luminance: 
			</td>
			<td class="margin">
				{{$block->luminance}}
			</td>
		</tr>
				<tr>
			<td>
				Blast Resistance: 
			</td>
			<td class="margin">
				{{$block->blast_resistance}}
			</td>
		</tr>
				<tr>
			<td>
				Renewable: 
			</td>
			<td class="margin">
				{{$block->renewable}}
			</td>
		</tr>
				<tr>
			<td>
				Stackable: 
			</td>
			<td class="margin">
				{{$block->stackable}}
			</td>
		</tr>
				<tr>
			<td>
				Flammable: 
			</td>
			<td class="margin">
				{{$block->drops}}
			</td>
		</tr>
	</table>
		</td>
		<td>
				<div class="description">	{{$block->description}}</div>
		</td>
	</tr>
</table>
	





<div>
	<a href="index"><button class="button2">Back to Index</button></a>
</div>



</body>
</html>

<style type="text/css">
.description
{
	margin-left: 30vw;
	margin-top: 2vw;
	font-size: 2vw;
	min-width: 35vw;
	max-width: 35vw;
	height: 30vw;
	min-height:30vw; 
	background-color: #9CCC65;
	border-style: none;
	word-wrap:break-word; 
}
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
.header2
{
	font-size: 5vw;
	margin-left: 10px;
}

.blocked
{
	font-family: Blocked;
}
.table
{	
	font-size:2vw;
	border-style: solid;
	border-color: #ffffff;
	margin-left: 1vw;
	margin-top: 2vw;
	text-shadow: 1px 2px 1px #00ff00;
}

.table0
{
		text-align: left: 
}
.margin
{
	padding-left: 25px;
}
.button2
{
	margin-left: 5vw;
	font-size: 2vw;
	font-family: arial;
width: 14.5vw;
height: 3vw;
background-color: #00ff00;
color: #000000;
border-style: none;
	box-shadow: 5px 5px 1px  #66cc00;
			text-shadow: 1px 1px 1px #000000;
}
</style>

