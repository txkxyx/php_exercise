<?php

$water_price = 60;
$water_count = 5;
$cup_price = 150;
$cup_count = 3;

$tax8 = 1.08;
$tax10 = 1.1;

$total = $water_price * $water_count * $tax8 + $cup_price * $cup_count * $tax10;

echo "total : ". $total;
?>