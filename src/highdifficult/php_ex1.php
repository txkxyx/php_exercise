<?php

function check_array_int($args){
    $odd = false;
    $even = false;
    foreach ($args as $value) {
        if($value % 2 == 0){
            $even = true;
        }else{
            $odd = true;
        }
    }
    return ["odd" => $odd, "even" => $even];
}

function do_process($array, $isOdd){
    for ($i=0; $i < count($array); $i++) { 
        if($isOdd){
            $array[$i] -=1;
        }else{
            $array[$i] /= 2;
        }
    }
    return $array;
}

$array = [9, 17, 33, 65, 129];

$count = 0;
$flag = true;
while($flag){
    $result = check_array_int($array);
    if($result["odd"] && $result["even"]){
        $flag = false;
    }else{
        $count ++;
        if($result["odd"]){
            $array = do_process($array, true);
        }else{
            $array = do_process($array, false);
        }
    }
}

echo "回数 : ". $count. "回". PHP_EOL;
echo "配列 : [";
foreach($array as $value){
    echo " ". $value.",";
}
echo "]";
