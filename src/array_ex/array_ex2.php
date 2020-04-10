<?php

$scores = [80, 88, 72, 100, 60, 68, 92];

$total = 0;
for($i = 0; $i < count($scores); $i ++){
    $total += $scores[$i];
}

$average = $total / count($scores);
echo "平均点 : ". $average. PHP_EOL;

for ($i=0; $i < count($scores); $i++) { 
    if($scores[$i] === $average){
        echo $scores[$i]. " : equal";
    }elseif($scores[$i] > $average){
        echo $scores[$i]. " : greater";
    }else{
        echo $scores[$i]. " : less";
    }
    echo PHP_EOL;
}
?>