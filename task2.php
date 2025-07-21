<?php

$n = 6;

function factorial($num) {
    return array_product(range(1, $num));
}

function sumOfDivisors($number) {
    $sum = 0;
    $sqrt = (int)sqrt($number);
    for ($i = 1; $i <= $sqrt; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
            $other = $number / $i;
            if ($other != $i) {
                $sum += $other;
            }
        }
    }
    return $sum;
}

$fact = factorial($n);
$sumDiv = sumOfDivisors($fact);
echo "Sum of divisors of $n! ($fact): $sumDiv\n";
