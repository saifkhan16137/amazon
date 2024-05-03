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
