<?php
$sentence = "Khan Shaban";

function countVowels($str) {

    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

$vowelCount = countVowels($sentence);
echo "<p>Number of vowels in the sentence: $vowelCount</p>";

?>
