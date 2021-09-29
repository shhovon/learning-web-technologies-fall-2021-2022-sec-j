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
					<td>USERNAME</td>
					<td>
						<input  type="text" id="myname" name="myname" value="<?php
                        if (isset($_POST['myname'])){ echo $_POST['myname'];} ?>
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