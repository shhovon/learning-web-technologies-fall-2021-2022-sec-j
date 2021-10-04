<?php

function isValidEmail($email)
{
    $indexOfA = -1;
    $indexOfDot = -1;
    for ($i = 0; $i < strlen($email); ++$i) 
    {
        if ($email[$i] == '@')
        {
            $indexOfA = $i;
        }
        if ($email[$i] == '.')
        {
            $indexOfDot = $i;
        }
    }
    if ($indexOfA == -1 || $indexOfDot == -1)
    {
        return false;
    }
    if ($indexOfA < 1 || $indexOfDot == strlen($email) - 1 || $indexOfDot - $indexOfA < 2)
    {
        return false;
    }
    return true;
}
if (isset($_REQUEST['submit']))
{
    $email = $_REQUEST['email'];
    if ($email == "")
    {
        echo "Email can not be empty";
        return;
    }
    if(!isValidEmail($email))
    {
        echo $email.' is not a valid email address';
        return;
    }
    echo $email;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Email Field</title>
</head>
<body>
    <form method="post" action="#">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="text" name="email" value="">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>