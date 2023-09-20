<?php
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . ' ';
        }
        $i += $step;
    } while ($i <= $end);
}

$start = 2;
$end = 20;
$step = 2;

echo "Even number: ";
printEvenNumbersDoWhile($start, $end, $step);
echo "\n";
