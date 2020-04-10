<?php

echo " 1 2 3 4 5 6 7 8 9". PHP_EOL;

for ($i=1; $i <= 9; $i++) { 
    echo $i. " ";
    for ($j=1; $j <= 9; $j++) { 
        echo $i*$j. " ";
    }
    echo PHP_EOL;
}

?>