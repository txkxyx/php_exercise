<?php

$scores = ["国語" => 80, "数学" => 75, "社会" => 88, "理科" => 90, "英語" => 65];

$total = 0;
foreach($scores as $key => $score){
    echo $key. " : ". $score. PHP_EOL;
    $total += $score;
}

$average = $total / count($scores);
echo "平均点 : ". $average;
?>