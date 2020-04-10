<?php

$users = [
    "A" => ["Japanese" => 80, "Math" => 75, "Society" => 88, "Science" => 90, "English" => 65],
    "B" => ["Japanese" => 67, "Math" => 55, "Society" => 74, "Science" => 83, "English" => 79],
    "C" => ["Japanese" => 90, "Math" => 87, "Society" => 90, "Science" => 87, "English" => 92],
    "D" => ["Japanese" => 78, "Math" => 90, "Society" => 79, "Science" => 74, "English" => 89],
    "E" => ["Japanese" => 92, "Math" => 89, "Society" => 78, "Science" => 91, "English" => 75],
];

$totals =[
    "Japanese" => 0,
    "Math" => 0,
    "Society" => 0,
    "Science" => 0,
    "English" => 0,
];

foreach ($users as $user => $scores) {
    foreach ($scores as $subject => $score) {
        $totals[$subject] += $score;
    }
}

foreach ($totals as $subject => $total) {
    $average = $total / count($users);
    echo $subject."の平均点 : ". $average.PHP_EOL;
}