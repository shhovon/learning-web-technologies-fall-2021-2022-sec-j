<?php
if (isset($_REQUEST['submit']))
{
    $dd = $_REQUEST['day'];
    $mm = $_REQUEST['month'];
    $yy = $_REQUEST['year'];

    $date = $dd . '/' . $mm . '/' . $yy;

    if ($dd == "" || $mm == "" || $yy == "" || $dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yy < 1953 || $yy > 1998)
    {
        echo $date . ' is not a valid date';
        return;
    }

    echo $date . ' is valid';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DOB Field</title>
</head>

<body>
    <form method="post" action="#">
        <fieldset>
            <section>Date Of Birth</section>
            <table>
                <tr>
                    <td align="center">dd</td>
                    <td align="center">mm</td>
                    <td align="center">yyyy</td>
                </tr>
                <tr>
                    <td>
                        <input size="2" type="text" name="day"> /
                    </td>
                    <td>
                        <input size="2" type="text" name="month"> /
                    </td>
                    <td>
                        <input size="4" type="text" name="year">
                    </td>
                </tr>
            </table>
            <hr />
            <input name="submit" type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>