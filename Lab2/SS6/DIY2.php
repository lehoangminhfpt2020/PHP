<HTML>
<head>
    <title>DIY2 SS6</title>
</head>
<BODY>
<form method="post" action="DIY2.php">
    <tr>
        <td><h4>Enter first number:</h4></td>
        <td><input type="text" name="num1"></td>
    </tr>

    <h4>Enter second number:</h4>
    <input type="text" name="num2">
    <br><br>
    <input type="submit" value="click to get sum">
</form>
<?php
error_reporting(1);
$a = $_POST["num1"];
$b = $_POST["num2"];
$c = $a + $b;

echo "$a + $b = $c";

?>
</BODY>
</HTML>