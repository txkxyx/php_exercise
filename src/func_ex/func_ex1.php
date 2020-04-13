<?php

function taxCalcu($price, $count, $reduced){
    $tax_rate = 1.1;
    if($reduced){
        $tax_rate = 1.08;
    }
    return $price * $count * $tax_rate;
}

$water_price = 60;
$water_count = 5;
$cup_price = 150;
$cup_count = 3;

$total = taxCalcu($water_price, $water_count, true) + taxCalcu($cup_price, $cup_count, false);

echo "total : ". $total;
?>