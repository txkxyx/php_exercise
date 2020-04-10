<?php
$row = 5;

for ($i=1; $i <= $row; $i++) { 
    $space = $row - $i;
    for ($j=0; $j < $space; $j++) { 
        echo " ";
    }
    $item = $i*2 - 1;
    for ($j=0; $j < $item; $j++) { 
        echo "*";
    }
    echo PHP_EOL;
}
?>