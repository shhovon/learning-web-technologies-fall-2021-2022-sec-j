<?php
if (isset($_REQUEST['submit']))
{
    $count = 0;
    if($count += isset($_REQUEST['ssc']))
    {
        $count+=$count;
    }
    
    if($count += isset($_REQUEST['hsc']))
    {
        $count+=$count;
    }
    
    if($count += isset($_REQUEST['bsc']))
    {
        $count+=$count;
    } 

    if($count += isset($_REQUEST['msc']))
    {
        $count+=$count;
    }

    if ($count < 2)
    {
        echo 'At least two must be selected';
        return;
    }
    echo 'Selected';
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
            <input type="checkbox" name="ssc" value="SSC"> SSC
            <input type="checkbox" name="hsc" value="HSC"> HSC
            <input type="checkbox" name="bsc" value="BSc"> BSc
            <input type="checkbox" name="msc" value="MSc"> MSc
            <input name="submit" type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>