<?php
if (isset($_REQUEST['submit']))
{
    if (isset(($_REQUEST['gender'])))
    {
        echo  $_REQUEST['gender'] . ' is selected';
    } else
    {
        echo 'One of them must be selected';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GENDER</title>
</head>

<body>
    <form method="post" action="#">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
            <input name="submit" type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>