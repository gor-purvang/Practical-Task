<?php
// Example input
$str1 = "Parth";
$str2 = "Paras";

// Convert to arrays for easier manipulation
$arr1 = str_split($str1);
$arr2 = str_split($str2);

// Remove the first occurrence of each matching character from both arrays (in order of the first string)
$i = 0;
while ($i < count($arr1)) {
    $char = $arr1[$i];
    $j = array_search($char, $arr2);
    if ($j !== false) {
        array_splice($arr1, $i, 1);
        array_splice($arr2, $j, 1);
        // Do not increment $i, as the next character shifts into $i
    } else {
        $i++;
    }
}

// Concatenate and print the result
echo implode('', $arr1) . implode('', $arr2) . "\n";
