<?php

$price = 2980;
$member = false;
$special = false;

$point = 0;

if($member && $price >= 100){
    $point = (int)($price / 100);
    if($special){
        $point *= 2;
    }
}

echo "point : ". $point;
?>