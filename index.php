
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Slimple Caculator</h1>
<form method="post">
    <fieldset>
        <legend>Caculator</legend>
        First operand : <input type="text" name="first">
        <br><br>
        Operator : <select name="operator">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <br><br>
        Second operand : <input type="text" name="second">
        <input type="submit">
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["first"];
    $num1 = $_POST["second"];
    $num2 = $_POST["operator"];
}
function calculator($num, $num1, $num2)
{
    if ($num2 == "addition") {
        $result = $num + $num1;
        echo "Result: " . $num . "+" . $num1 . "=" . $result;
    }
    if ($num2 == "subtraction") {
        $result = $num - $num1;
        echo "Result: " . $num . "-" . $num1 . "=" . $result;
    }
    if ($num2 == "multiplication") {
        $result = $num * $num1;
        echo "Result: " . $num . "*" . $num1 . "=" . $result;
    }
    if ($num2 == "division") {
        if ($num1 == 0) {
            throw new Exception("Lỗi");
        }
        $result = $num / $num1;
        echo "Result: " . $num . "/" . $num1 . "=" . $result;
    }
}
try{
    calculator($num, $num1, $num2);
}catch (Exception $e){
    echo $e -> getMessage();
}
?>
</body>
</html>