# PHP演習問題応用

# php_ex1.php

任意の数の正の整数が格納された配列があります。Aさんは、その配列の正の整数が以下の条件の場合に、対応した処理を行うことができます。

- 配列がすべてが偶数の場合

    配列内の数字をすべて2で割った数に置き換える

- 配列がすべてが奇数の場合

    配列内の数字をすべて1引いた数に置き換える

- 配列に偶数と奇数が混在する場合

    処理を終了する。

- 処理終了時

    配列を置き換えた回数と終了時の配列を表示してください。
    
上記の条件を満たすプログラムを作成せよ。
ただし、配列の要素は2つ以上で、すべて同じ数字の配列ではないこと。

- 解答例

```php
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
?>
```