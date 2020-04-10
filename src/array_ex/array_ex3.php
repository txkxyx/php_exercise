<?php

$scores = [[80, 70], [60, 60], [75, 80], [100, 80]];

for ($i=0; $i < count($scores); $i++) {
    $total = 0; 
    for ($j=0; $j < count($scores[$i]); $j++) { 
        $total += $scores[$i][$j];
    }
    echo $total. PHP_EOL;
}
?>