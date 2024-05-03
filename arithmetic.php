<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operation</title>
</head>

<body>

<form action="ArithmeticTask.php" method="GET">
<input type="text" name="num1" id="num1" placeholder="Enter first number"><br><br>
<input type="text" name="num2" id="num2" placeholder="Enter second number"><br><br>
<input type="submit" value="Sum" name="sum">
<input type="submit" value="Subtract" name="sub">
<input type="submit" value="Multiply" name="multiply">
<input type="submit" value="Divide" name="divide">

</form>
</body>
</html>

<?php
if(isset($_GET["sum"])){
$number1=$_GET['num1'];
$number2=$_GET['num2'];
echo "<h2>The sum is " . ($number1 + $number2) . "</h1>";
}
else if(isset($_GET["sub"])){
$number1=$_GET['num1'];
$number2=$_GET['num2'];
echo "<h2>The subtraction is " . ($number1 - $number2) . "</h1>";
}
else if(isset($_GET["multiply"])){
$number1=$_GET['num1'];
$number2=$_GET['num2'];
echo "<h2>The product is " . ($number1 * $number2) . "</h1>";
}
else if(isset($_GET["divide"])){
$number1=$_GET['num1'];
$number2=$_GET['num2'];
echo "<h2>The division is " . ($number1 / $number2) . "</h1>";
}
?>