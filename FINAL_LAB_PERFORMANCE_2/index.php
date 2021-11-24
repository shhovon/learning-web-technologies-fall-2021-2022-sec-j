<!DOCTYPE html>

<head>
    <title>PHP Calculator</title>
</head>

<?php
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$operator = $_POST['operator'];
$result = '';


?>

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
                <input name="result" value="<?php echo $result; ?>">
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </div>
    <style>
        body {
            padding: 0;
            margin: 20px;
            background-color: lightgray;
        }

        .page-wrap {
            display: grid;
            justify-content: center;
            align-content: center;
            min-height: 100vh;
            grid-template-columns: repeat(4, 100px);
            grid-template-rows: minmax(120px, auto) repeat(5, 100px);
        }
    </style>
</body>

</html>