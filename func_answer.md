# PHP基礎演習問題（関数）

## 1. func_ex1.php

購入した商品の単価と個数から消費税課税後の値段を計算できる関数を作成してください。ただし軽減税率対象商品にも対応できるように作成してください。

また、以下のような買い物をした際の合計金額を求めてください。

- 1本60円のミネラルウォーターを5本買いました。
- 1つ150円のコップを3つ買いました。
- ミネラルウォーターは軽減税率対象の商品のため、消費税率は8%です。
- コップの消費税は10%です。

- 実行結果

```console
> php func_ex1.php
total : 819
```

- 解答例

```php
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
```


## 2. func_ex2.php

500円玉を1枚、100円玉を4枚、10円玉を5枚持っています。
Aさんは460円の買い物をしました。Aさんはお釣りをもらわずちょうどこの金額を払うことができるか判定する関数を作成してください。購入できる際は硬貨の枚数を連想配列で戻り値として返し、購入できない際は`false`を返す関数としてください。

- 実行結果
    - 購入金額が460円の場合

    ```console
    > php func_ex2.php
    購入できません
    ```

    - 購入金額が450円の場合

    ```console
    > php func_ex2.php
    500円玉 : 0枚
    100円玉 : 4枚
    10円玉 : 5枚
    ````

- 解答例

```php
<?php

$number_500 = 1;
$number_100 = 4;
$number_10 = 5;

function judgePayable($money){
    global $number_500, $number_100, $number_10;
    for ($i=0; $i <= $number_500; $i++) { 
        for ($j=0; $j <= $number_100; $j++) { 
            for ($k=0; $k <= $number_10; $k++) { 
                if($money === 500 * $i + 100 * $j + 10 * $k){
                    return ["500" => $i, "100" => $j, "10" => $k];
                }
            }
        }
    }
    return false;
}

$result = judgePayable(50);
if($result){
    echo "500円玉 : ". $result["500"]. "枚". PHP_EOL;
    echo "100円玉 : ". $result["100"]. "枚". PHP_EOL;
    echo "10円玉 : ". $result["10"]. "枚". PHP_EOL;
}else{
    echo "購入できません";
}
```

