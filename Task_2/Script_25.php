<?php

$num1 = 10;
$num2 = 20;

echo "Before swapping : ";
echo "num1 = " . $num1 . ", num2 = " . $num2 . "<br><br>";


$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;

echo "After swapping : ";
echo "num1 = " . $num1 . ", num2 = " . $num2;
?>
