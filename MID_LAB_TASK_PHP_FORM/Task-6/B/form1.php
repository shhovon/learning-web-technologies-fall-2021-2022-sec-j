<?php 

	if(isset($_REQUEST['submit']))
	{
		$bg = $_REQUEST['bg'];
		echo $bg;
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blood Group</title>
</head>
<body>	
	<form method="post" action="form2.php">
		<fieldset>
			<legend>BLOOD GROUP</legend>
			<table>
				<tr>
					<td>BLOOD GROUP</td>
					<td>
                        <select name="bg">
                            <option name="bg" value="" selected>A+</option>
                            <option name="bg" value="">A-</option>
                            <option name="bg" value="">O+</option>
                            <option name="bg" value="">O-</option>
                            <option name="bg" value="">AB+</option>
                            <option name="bg" value="">AB-</option>
                        </select>
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