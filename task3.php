<?php

$first = 0;
$second = 1;


$count = 0;
// print the current fibonacci number
echo $first . ' ';

while ($count < 10) {
    
    $next = $first + $second;

    
    if ($next > 100) {
        break; 
    }

    
    echo $next . ' ';

    
    $first = $second;
    $second = $next;

    $count++;
}


?>
