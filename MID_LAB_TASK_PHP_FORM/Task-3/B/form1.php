<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['mydob'];
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
	<title>DOB</title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Date of Birth</legend>
			<table>
				<tr>
					<td>DOB</td>
					<td>
						<input type="date" name="mydob" value="">
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