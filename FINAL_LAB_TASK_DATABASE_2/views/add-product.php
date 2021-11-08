<html>

<head>
	<title>Create Product List</title>
</head>

<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>

	<form method="post" action="../controller/addProduct.php">
		<fieldset>
			<legend><b>Add Product</b></legend>
			<table>
				<tr>
					Product Name<br>
					<input type="text" name="pname" value=""><br>
				</tr>
				<tr>
					Buying Price<br>
					<input type="text" name="buying_price" value=""><br>
				</tr>
				<tr>
					Selling Price<br>
					<input type="text" name="selling_price" value="">
					<hr>
					<input type="checkbox" name="display" value=""> Display
					<hr>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>