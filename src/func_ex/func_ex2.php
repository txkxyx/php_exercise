<?php

$number_500 = 1;
$number_100 = 4;
$number_10 = 5;

function judgePayable($money){
    global $number_500, $number_100, $number_10;
    for ($i=0; $i <= $number_500; $i++) { 
        for ($j=0; $j <= $number_100; $j++) { 
            for ($k=0; $k <= $number_10; $k++) { 
                if($money === 500 * $i + 100 * $j + 10 * $k){
                    return ["500" => $i, "100" => $j, "10" => $k];
                }
            }
        }
    }
    return false;
}

$result = judgePayable(50);
if($result){
    echo "500円玉 : ". $result["500"]. "枚". PHP_EOL;
    echo "100円玉 : ". $result["100"]. "枚". PHP_EOL;
    echo "10円玉 : ". $result["10"]. "枚". PHP_EOL;
}else{
    echo "購入できません";
}