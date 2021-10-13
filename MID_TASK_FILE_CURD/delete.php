<?php

require_once('../userlist.php');
$value = $_GET['msg'];

$status = ($value);

if ($status) {
	header('location: ../home.php');
} else {
	echo 'error';
}
