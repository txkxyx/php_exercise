# PHP演習問題応用

## 1. php_ex1.php

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
        $array = do_process($array, $result["odd"]);
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

## 2. php_ex2.php

1～9の数字が書かれた赤と青のボールが1つずつ箱の中に入っています。
AさんとBさんは交互にこの箱からボールを取り出し、取り出したボールの数字と色を記録し、ボールを箱に返却します。これを10回繰り返します。
10回繰り返した後に、取り出したボールの数字と色によって以下のようなルールで点数が採点されます。

- 赤いボールの場合、合計にボールに書かれている数のマイナスの点数が加算される
- 青いボールの場合、合計にボールに書かれている数の点数が加算される

AさんとBさんの合計の点数の差が50点以上となった場合はゲームを終了する。合計の点数の差が50点以上とならない場合は、記録を取り消しもう一度10回ずつボールを取り出します。

ゲーム終了時に、何回繰り返したかと両者の点数を表示してください。

- 実行例

```console
> php php_ex2.php
10回目
Aさんの得点 : 31点
Bさんの得点 : -22点
```

- 解答例

```php
<?php

function sum_score($array){
    $sum = 0;
    foreach($array as $dict){
        if($dict["color"] === "R"){
            $sum -= $dict["number"];
        }else{
            $sum += $dict["number"];
        }
    }
    return $sum;
}

function compare_score($a_array, $b_array){
    return sum_score($a_array) - sum_score($b_array);
}

$balls = [
    ["number" => 1, "color" => "R"], ["number" => 1, "color" => "B"],
    ["number" => 2, "color" => "R"], ["number" => 2, "color" => "B"],
    ["number" => 3, "color" => "R"], ["number" => 3, "color" => "B"],
    ["number" => 4, "color" => "R"], ["number" => 4, "color" => "B"],
    ["number" => 5, "color" => "R"], ["number" => 5, "color" => "B"],
    ["number" => 6, "color" => "R"], ["number" => 6, "color" => "B"],
    ["number" => 7, "color" => "R"], ["number" => 7, "color" => "B"],
    ["number" => 8, "color" => "R"], ["number" => 8, "color" => "B"],
    ["number" => 9, "color" => "R"], ["number" => 9, "color" => "B"],
];

$flag = true;
$count = 0;

while($flag){
    $a_balls = [];
    $b_balls = [];
    for($i=0; $i < 10; $i ++){
        array_push($a_balls, $balls[array_rand($balls)]);
        array_push($b_balls, $balls[array_rand($balls)]);
    }
    $count ++;
    $flag = abs(compare_score($a_balls,$b_balls)) < 50;
}

echo $count. "回目".PHP_EOL;
echo "Aさんの得点 : ". sum_score($a_balls). "点". PHP_EOL;
echo "Bさんの得点 : ". sum_score($b_balls). "点". PHP_EOL;

?>
```