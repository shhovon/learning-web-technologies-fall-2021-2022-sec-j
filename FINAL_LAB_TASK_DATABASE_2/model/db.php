<?php

$host = "localhost";
$dbname = "product_db";
$dbuser = 'root';
$dbpass = '';

function getConnection()
{
	global $host;
	global $dbname;
	global $dbpass;
	global $dbuser;

	$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	return $con;
}
