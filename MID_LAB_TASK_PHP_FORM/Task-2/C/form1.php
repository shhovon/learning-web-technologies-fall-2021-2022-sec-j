<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>NAME</legend>
			<table>
				<tr>
					<td>EMAIL</td>
					<td>
						<input  type="text" name="myemail" value="<?php
                        if (isset($_POST['myemail'])){ echo $_POST['myemail'];} ?>
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