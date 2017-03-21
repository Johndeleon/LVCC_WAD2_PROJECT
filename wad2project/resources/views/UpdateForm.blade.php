<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UpdateForm</title>
</head>
<body>
<div class="body">
		<header class="header">
			Mineclopedia admin
		</header>
	<form method="post" action="/UpdateNow">


	{{csrf_field()}}

	<table class="table blocked">

		<tr>
			<td hidden>
				<div>id</div>
			</td>
		</tr>
		<tr>
			<td>
				<div>Type Name</div>

			</td>
		</tr>

		<tr>
			<td hidden>
				<div><input type="text" name="id" value="{{$type->id}}" class="textbox" required></div>
			</td>
		</tr>
		<tr>
			<td>
				<div><input type="text" name="type_name" value="{{$type->type_name}}" class="textbox" required></div>

			</td>
		</tr>
	</table>

		<button class="button2 margin3">UpdateNow</button>



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

.button2
{
	font-size: 2vw;
	font-family: arial;
width: 12.5vw;
height: 3vw;
background-color: #00ff00;
color: #000000;
border-style: none;
	box-shadow: 5px 5px 1px  #66cc00;
			text-shadow: 1px 1px 1px #000000;

}
.margin3
{
	margin-top: 1vw;
	margin-left: 25vw;
}
</style>