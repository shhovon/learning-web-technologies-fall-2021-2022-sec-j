<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gender</title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>GENDER</legend>
			<table>
				<tr>
					<td>GENDER</td>
					<td>
						<input  type="radio" name="mygender" value="<?php
                        if (isset($_POST['mygender'])){ echo $_POST['mygender'];} ?>
                        "> Male
                        <input  type="radio" name="mygender" value="<?php
                        if (isset($_POST['mygender'])){ echo $_POST['mygender'];} ?>
                        "> Female
                        <input  type="radio" name="mygender" value="<?php
                        if (isset($_POST['mygender'])){ echo $_POST['mygender'];} ?>
                        "> Other
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