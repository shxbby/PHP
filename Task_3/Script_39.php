<?php
/* Create a PHP script that extracts a portion of an array using the array_slice() function 
and displays the result. */

$color=array("red","green","blue","yellow","brown");
print_r(array_slice($color,2));

//Output:Array ( [0] => blue [1] => yellow [2] => brown )

?>