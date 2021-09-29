<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myemail'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<table>
				<tr>
					<td>EMAIL</td>
					<td>
						<input type="text" name="myemail" value="">
					</td>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>