<?php

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
    $columnSums[$col] = $sum;
}

// Calculate product of each row
$rowProducts = [];
foreach ($matrix as $i => $row) {
    $rowProducts[$i] = array_product($row);
}

// Output results
foreach ($columnSums as $i => $sum) {
    echo "Sum of column $i: $sum\n";
}
foreach ($rowProducts as $i => $product) {
    echo "Product of row $i: $product\n";
}
