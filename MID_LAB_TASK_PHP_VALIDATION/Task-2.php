<?php

function validity($email)
{
    $letter = -1;
    $dot = -1;
    for ($i = 0; $i < strlen($email); ++$i) 
    {
        if ($email[$i] == '@')
        {
            $letter = $i;
        }
        if ($email[$i] == '.')
        {
            $dot = $i;
        }
    }
    if ($letter == -1 || $dot == -1)
    {
        return false;
    }
    if ($letter < 1 || $dot == strlen($email) - 1 || $dot - $letter < 2)
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
    if(!validity($email))
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
