<?php  
/*  Write a PHP script to reverse the elements of an array using the array_reverse() function. */

$Fruits=array("Apple","Mango","Watermallon","Banana");
$Reversearray=array_reverse($Fruits);
print_r($Reversearray);

//Output:Array ( [0] => Banana [1] => Watermallon [2] => Mango [3] => Apple )
?>