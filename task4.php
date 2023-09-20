<?php
function printFibonacci($n) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $n; $i++) {
        // Print the current Fibonacci number
        echo $first . ' ';

        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Update variables for the next iteration
        $first = $second;
        $second = $next;
    }
}


$n = 15;
echo "First $n Fibonacci numbers: ";
printFibonacci($n);
