<?php

$str1 = "Parth";
$str2 = "Paras";

$arr1 = str_split($str1);
$arr2 = str_split($str2);

foreach ($arr1 as $i => $char) {
    $j = array_search($char, $arr2);
    if ($j !== false) {
        $arr1[$i] = null;
        $arr2[$j] = null;
    }
}

$result1 = implode('', array_filter($arr1, fn($c) => $c !== null));
$result2 = implode('', array_filter($arr2, fn($c) => $c !== null));
echo $result1 . $result2 . "\n";