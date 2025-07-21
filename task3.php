<?php
for ($i = 1; $i <= 200; $i++) {
    if ($i % 28 === 0) {
        echo "xxxyyy\n";
    } elseif ($i % 4 === 0) {
        echo "xxx\n";
    } elseif ($i % 7 === 0) {
        echo "yyy\n";
    } else {
        echo "$i\n";
    }
}
