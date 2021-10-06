<?php

if($_POST['username']!= '' && $_POST['password'] != '' && $_POST['email'] != ''&& $_POST['name'] != ''&& $_POST['confirm_password'] != '' && $_POST['gender'] != ''&& $_POST['dob']!= '')
{
    header('location: login.html');
}
else
{
    echo "null value...";
}

?>
