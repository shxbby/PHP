<?php
/*  Create a PHP script that finds the difference between two arrays using the array_diff() 
function. */

$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
$difference = array_diff($array1, $array2);
echo "Difference between array1 and array2: ";
print_r($difference);

//Output:Difference between array1 and array2: Array ( [0] => 1 [1] => 2 )


?>