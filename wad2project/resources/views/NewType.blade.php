<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>NewType</title>
</head>
<body>
<div class="body">
<header class="header">
			Mineclopedia admin
		</header>
	<form method="post" action="CreateType">
{{csrf_field()}}

<table class="table">

	<tr>
		<td>
			Type Name:<td><input type="text" name="type_name" class="textbox" required></td>
		</td>
	</tr>


</table>



<button class="button margin3 blocked">Create Type!</button>
</form>
</div>
</body>
</html>