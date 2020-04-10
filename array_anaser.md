# PHP基礎演習解答（添字配列）

## 1. array_ex1.php

以下のようなテストの結果が格納された配列が用意されています。平均値を求めてください。
- テストの結果の配列

```
$scores = [80, 88, 72, 100, 60, 68, 92];
```

- 実行結果

```console
> php array_ex1.php
平均点 : 81.571428571429
```

- 解答

```php
<?php

$scores = [77, 84, 81, 95, 74, 68, 92];

$total = 0;
for($i = 0; $i < count($scores); $i ++){
    $total += $scores[$i];
}

$average = $total / count($scores);
echo "平均点 : ". $average. PHP_EOL;

?>
```

<hr>

## 2. array_ex2.php

以下のようなテストの結果が格納された配列が用意されています。平均値を求めてください。また各点数が平均点よりも低い（less）か高い（greater）か等しい（equal）かを表示してください。

- テストの結果の配列

```
$scores = [80, 88, 72, 100, 60, 68, 92];
```

- 実行結果

```console
> php array_ex2.php
平均点 : 80
80 : equal
88 : greater
72 : less
100 : greater
60 : less
68 : less
92 : greater
```

- 解答

```php
<?php

$scores = [80, 88, 72, 100, 60, 68, 92];

$total = 0;
for($i = 0; $i < count($scores); $i ++){
    $total += $scores[$i];
}

$average = $total / count($scores);
echo "平均点 : ". $average. PHP_EOL;

for ($i=0; $i < count($scores); $i++) { 
    if($scores[$i] === $average){
        echo $scores[$i]. " : equal";
    }elseif($scores[$i] > $average){
        echo $scores[$i]. " : greater";
    }else{
        echo $scores[$i]. " : less";
    }
    echo PHP_EOL;
}
?>
```

<hr>

## 3. array_ex3.php

以下のような、2次元配列があります。各配列の一次元配列の合計を表示してください。

- 二次元配列

```
$scores = [[80, 70], [60, 60], [75, 80], [100, 80]];
```

- 実行結果

```console
>php array_ex3.php
150
120
155
180
```

- 解答

```php
<?php

$scores = [[80, 70], [60, 60], [75, 80], [100, 80]];

for ($i=0; $i < count($scores); $i++) {
    $total = 0; 
    for ($j=0; $j < count($scores[$i]); $j++) { 
        $total += $scores[$i][$j];
    }
    echo $total. PHP_EOL;
}
?>
```