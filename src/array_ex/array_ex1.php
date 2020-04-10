<?php

$scores = [77, 84, 81, 95, 74, 68, 92];

$total = 0;
for($i = 0; $i < count($scores); $i ++){
    $total += $scores[$i];
}

$average = $total / count($scores);
echo "平均点 : ". $average. PHP_EOL;

?>