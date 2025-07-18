<?php
// Example matrix
$matrix = [
    [1, 5, 8],
    [2, 3, 4],
    [6, 7, 9],
];

// Calculate sum of each column
$columnSums = [];
$colCount = count($matrix[0]);
$rowCount = count($matrix);
for ($col = 0; $col < $colCount; $col++) {
    $sum = 0;
    for ($row = 0; $row < $rowCount; $row++) {
        $sum += $matrix[$row][$col];
    }
    $columnSums[] = $sum;
}

// Calculate multiplication of each row
$rowProducts = [];
foreach ($matrix as $row) {
    $product = 1;
    foreach ($row as $value) {
        $product *= $value;
    }
    $rowProducts[] = $product;
}

// Output results in the specified format
for ($i = 0; $i < $colCount; $i++) {
    echo "Sum of column $i: {$columnSums[$i]}\n";
}
for ($i = 0; $i < $rowCount; $i++) {
    echo "Multiplication of row $i: {$rowProducts[$i]}\n";
}
