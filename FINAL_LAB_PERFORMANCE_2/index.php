<!DOCTYPE html>

<head>
    <title>PHP Calculator</title>
</head>

<?php
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($input1) && is_numeric($input2)) {
    switch ($operator) {
        case "+":
            $result = (float)$input1 + (float)$input2;
            break;
        case "-":
            $result = (float)$input1 - (float)$input2;
            break;
        case "*":
            $result = (float)$input1 * (float)$input2;
            break;
        case "/":
            $result = (float)$input1 / (float)$input2;
    }
}

?>
<link rel="stylesheet" href="style.css">

<body>
    <div id="page-wrap">
        <h1>PHP Calculator</h1>
        <form action="" method="post" id="quiz-form">
            <p><b>First Number</b>
                <input type="number" name="input1" id="input1" value="<?php echo $input1; ?>" />
            </p>
            <p> <b>Second Number</b>
                <input type="number" name="input2" id="input2" value="<?php echo $input2; ?>" />
            </p>
            <p> <b>Result</b>
                <input type="number" name="result" value="<?php echo $result; ?>">
            </p>
            <div id="buttons">
                <input type="submit" name="operator" value="+" />
                <input type="submit" name="operator" value="-" />
                <input type="submit" name="operator" value="*" />
                <input type="submit" name="operator" value="/" />
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>