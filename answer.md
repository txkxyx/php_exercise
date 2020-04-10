# PHP基礎演習解答例

## 変数・演算子

### 1. var_ex1.php

以下の指示にしたがってプログラム`var_ex1.php`を作成してください。

- 変数$point1を宣言し、30を代入します。
- 変数$point2を宣言し、50を代入します。
- 変数$point3を宣言し、60を代入します。
- コンソール画面に`point : 305060`を出力してください。

```php
<?php

$point1 = 30;
$point2 = 50;
$point3 = 60;

echo "point : ". $point1. $point2. $point3;

?>
```

### 2. var_ex2.php

以下の実行結果となるようなPHPプログラムを作成してください。

```console
> php var_ex2.php
Hello PHP
Hello Java
Hello MySQL
```

```php
<?php

$hello = "Hello ";

echo $hello. "PHP". PHP_EOL;
echo $hello. "Java". PHP_EOL;
echo $hello. "MySQL". PHP_EOL;
?>
```

### 3. var_ex3.php

以下のような買い物をした際の合計金額を求めてください。

- 1本60円のミネラルウォーターを5本買いました。
- 1つ150円のコップを3つ買いました。
- ミネラルウォーターは軽減税率対象の商品のため、消費税率は8%です。
- コップの消費税は10%です。

```console
> php var_ex3.php
total : 819
```

```php
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
```

### 4. var_ex4.php

以下の条件の場合の台形の面積を求めてください。単位は考慮する必要はありません。

- 上底：20
- 下底：50
- 高さ：10

```console
> php var_ex4.php
area : 350
```

```php
<?php
$upper = 20;
$bottom = 50;
$height = 10;

$area = ($upper + $bottom) * $height / 2;

echo "area : ". $area;
?>
    ```