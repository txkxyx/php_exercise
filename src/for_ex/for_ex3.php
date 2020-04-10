<?php
$row = 5;

for ($i=1; $i <= $row; $i++) { 
    $space = $row - $i;
    for ($j=0; $j < $space; $j++) { 
        echo " ";
    }
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
    echo PHP_EOL;
}
?>