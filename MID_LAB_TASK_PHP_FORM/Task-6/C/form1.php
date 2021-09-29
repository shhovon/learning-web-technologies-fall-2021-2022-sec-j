<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blood Group</title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>BLOOD GROUP</legend>
			<table>
				<tr>
					<td>BLOOD GROUP</td>
					<td>
                        <select name="bg">
                            <option name="bg" value="<?php
                        if (isset($_POST['bg'])){ echo $_POST['bg'];} ?>" selected>A+</option>
                            <option name="bg" value="<?php
                        if (isset($_POST['bg'])){ echo $_POST['bg'];} ?>">A-</option>
                            <option name="bg" value="<?php
                        if (isset($_POST['bg'])){ echo $_POST['bg'];} ?>">O+</option>
                            <option name="bg" value="<?php
                        if (isset($_POST['bg'])){ echo $_POST['bg'];} ?>">O-</option>
                            <option name="bg" value="<?php
                        if (isset($_POST['bg'])){ echo $_POST['bg'];} ?>">AB+</option>
                            <option name="bg" value="<?php
                        if (isset($_POST['bg'])){ echo $_POST['bg'];} ?>">AB-</option>
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