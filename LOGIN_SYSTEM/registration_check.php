<?php

if($username != '' && $password != '' && $email != ''&& $name != ''&& $confirm_password != '' && $gender != ''&& $dob!= '')
{
    header('location: login.html');
}
else
{
    echo "null value...";
}

?>