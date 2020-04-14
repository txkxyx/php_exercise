<?php

function sum_score($array){
    $sum = 0;
    foreach($array as $dict){
        if($dict["color"] === "R"){
            $sum -= $dict["number"];
        }else{
            $sum += $dict["number"];
        }
    }
    return $sum;
}

function compare_score($a_array, $b_array){
    return sum_score($a_array) - sum_score($b_array);
}

$balls = [
    ["number" => 1, "color" => "R"], ["number" => 1, "color" => "B"],
    ["number" => 2, "color" => "R"], ["number" => 2, "color" => "B"],
    ["number" => 3, "color" => "R"], ["number" => 3, "color" => "B"],
    ["number" => 4, "color" => "R"], ["number" => 4, "color" => "B"],
    ["number" => 5, "color" => "R"], ["number" => 5, "color" => "B"],
    ["number" => 6, "color" => "R"], ["number" => 6, "color" => "B"],
    ["number" => 7, "color" => "R"], ["number" => 7, "color" => "B"],
    ["number" => 8, "color" => "R"], ["number" => 8, "color" => "B"],
    ["number" => 9, "color" => "R"], ["number" => 9, "color" => "B"],
];

$flag = true;
$count = 0;

while($flag){
    $a_balls = [];
    $b_balls = [];
    for($i=0; $i < 10; $i ++){
        array_push($a_balls, $balls[array_rand($balls)]);
        array_push($b_balls, $balls[array_rand($balls)]);
    }
    $count ++;
    $flag = abs(compare_score($a_balls,$b_balls)) < 50;
}

echo $count. "回目".PHP_EOL;
echo "Aさんの得点 : ". sum_score($a_balls). "点". PHP_EOL;
echo "Bさんの得点 : ". sum_score($b_balls). "点". PHP_EOL;

?>