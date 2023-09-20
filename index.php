<?php

function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
    }
}

$start = 1;
$end = 20;
$step = 2;

echo "Even number: ";
printEvenNumbersFor(2, 20, 2);
echo "\n";

