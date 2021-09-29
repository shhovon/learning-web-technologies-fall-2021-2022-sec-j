<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DOB</title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>Date of Birth</legend>
			<table>
				<tr>
					<td>DOB</td>
					<td>
						<input type="date" name="mydob" value="<?php
                        if (isset($_POST['mydob'])){ echo $_POST['mydob'];} ?>
                        ">
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