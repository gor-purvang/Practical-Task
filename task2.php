<?php
// Input number
$n = 6;

// Calculate factorial
function factorial($num) {
    $result = 1;
    for ($i = 2; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}

// Find all divisors and sum them
function sumOfDivisors($number) {
    $sum = 0;
    for ($i = 1; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
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
