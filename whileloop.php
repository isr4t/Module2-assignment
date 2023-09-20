<?php

function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
        $i += $step;
    }
}

$start = 2;
$end = 20;
$step = 2;

echo "Even number: ";
printEvenNumbersWhile($start, $end, $step);
echo "\n";
