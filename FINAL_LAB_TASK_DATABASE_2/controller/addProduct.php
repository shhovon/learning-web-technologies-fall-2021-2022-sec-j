<?php

require_once('../model/productsModel.php');

if (isset($_POST['submit'])) {

	$pname 	= $_POST['pname'];
	$buying_price 		= $_POST['buying_price'];
	$selling_price 	= $_POST['selling_price'];

	if ($pname != "") {
		if ($selling_price != "") {
			if ($buying_price != "") {

				$product = ['pname' => $pname, 'buying_price' => $buying_price, 'selling_price' => $selling_price];
				$status = addProduct($product);


				//echo "success";
				header('location: ../views/product.php');

				// if ($status) {

				// } else {
				// 	echo "try again...";
				// }
			} else {
				echo "Invalid Buying Price!";
			}
		} else {
			echo "Invalid Selling Price!";
		}
	} else {
		echo "invalid Product Name!";
	}
}
