<?php 

	if(isset($_REQUEST['submit']))
	{
		$mydegree = $_REQUEST['mygender'];
		echo $mydegree;
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Degree</title>
</head>
<body>	
	<form method="get" action="namecheck.php">
		<fieldset>
			<legend>DEGREE</legend>
			<table>
				<tr>
					<td>DEGREE</td>
					<td>
						<input type="checkbox" name="mydegree" value="">SSC
                        <input type="checkbox" name="mydegree" value="">HSC
                        <input type="checkbox" name="mydegree" value="">BSc
                        <input type="checkbox" name="mydegree" value="">MSc
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