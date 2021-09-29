<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Degree</title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>DEGREE</legend>
			<table>
				<tr>
					<td>DEGREE</td>
					<td>
                        <input type="checkbox" name="mydegree" value="<?php
                        if (isset($_POST['mydegree'])){ echo $_POST['mydegree'];} ?>">SSC
                        <input type="checkbox" name="mydegree" value="<?php
                        if (isset($_POST['mydegree'])){ echo $_POST['mydegree'];} ?>">HSC
                        <input type="checkbox" name="mydegree" value="<?php
                        if (isset($_POST['mydegree'])){ echo $_POST['mydegree'];} ?>">BSc
                        <input type="checkbox" name="mydegree" value="<?php
                        if (isset($_POST['mydegree'])){ echo $_POST['mydegree'];} ?>">MSc
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