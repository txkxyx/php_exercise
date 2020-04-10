<?php

// 午前の点数
$am_score = 70;
// 午後の点数
$pm_score = 70;

if($am_score < 70){
    echo "不合格". PHP_EOL;
}elseif($pm_score < 70){
    echo "不合格". PHP_EOL. "次回は午前の試験が免除";
}else{
    echo "合格";
}
?>