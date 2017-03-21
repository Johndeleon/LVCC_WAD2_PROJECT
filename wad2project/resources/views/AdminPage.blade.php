<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="wad2project.css">
	<title>Administrator</title>
</head>
<body>
	<div class="body">
		<header class="header" style="font-size: 4.5vw">
			Mineclopedia admin
			<a href="login"><button class="button5">Logout</button></a>
			<a href="/changecredentials"><button class="button5" style="width:20vw;">Change Credentials</button></a>
		</header>
		<div>
			 @if(Session::has('flash_message'))
			 		<div class="session">{{Session::get('flash_message')}}</div>
			  @endif
		</div>
 

		<div class="margin2">
		<table>
			<tr>
				<td>
		<a href="/NewBlock"><button class="button blocked">Insert a New Block</button></a>
				</td>
				<td>
		<a href="/NewType"><button class="button blocked">Insert a New Type</button></a>
				</td>
				<tr>
				<td>
		<a href="/UpdateBlock"><button class="button blocked">Update a Block </button></a>	
				</td>
				<td>
		<a href="/UpdateType"><button class="button blocked">Update a Type</button></a>
				</td>
				</tr>
				<tr>
				<td>
		<a href="/DeleteBlock"><button class="button blocked">Delete a Block</button></a>
				</td>

				<td>
		<a href="/DeleteType"><button class="button blocked">Delete a Type</button></a>		
				</td>


			</tr>
		</table>



			
		</div>

	</div>





</body>
</html>