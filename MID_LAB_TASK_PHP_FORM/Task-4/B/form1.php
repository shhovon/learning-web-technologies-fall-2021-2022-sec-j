<?php 

	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['mygender'];
		echo $gender;
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gender</title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>GENDER</legend>
			<table>
				<tr>
					<td>GENDER</td>
					<td>
                    <input type="radio" name="mygender" value="">Male
                        <input type="radio" name="mygender" value="">Female
                        <input type="radio" name="mygender" value="">Other
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