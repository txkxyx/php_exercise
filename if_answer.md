# PHP基礎演習解答例（分岐構文）

## 1. if_ex1.php

以下の要件に合う、認証プログラムを作成してください。

- IDが`PHPUser`でパスワードが`PHPPassword`の場合は認証可能（画面にOKと表示）
- 上記以外の場合は認証不可（画面にNGと表示）

```php
<?php

$id = "";
$password = "";

if($id === "PHPUser" && $password === "PHPPassword"){
    echo "OK";
}else{
    echo "NG";
}
?>
```

## 2. if_ex2.php

以下の要件に合う、ECサイトのポイント管理のプログラムを作成してください。

- 会員でない場合はポイントは付与されません。
- 通常会員の場合は100円購入ごとに1ポイントが付与されます。
- 特別会員の場合は通常会員の2倍のポイントが付与されます。

```php
<?php

$price = 2980;
$member = false;
$special = false;

$point = 0;

if($member && $price >= 100){
    $point = (int)($price / 100);
    if($special){
        $point *= 2;
    }
}

echo "point : ". $point;
?>
```

## 3. if_ex3.php

以下の要件に合う、とある資格試験の合否判定プログラムを作成してください。

- 資格試験は午前と午後の2つの試験に分かれています。
- 午前と午後の点数がともに70点以上であれば合格です。
- 午前の点数が70点以上で、午後の点数が69点以下である場合は、次回は午前の試験が免除になります。
- 上記以外の場合は不合格となります。

```php
<?php

$am_score = 70;
$pm_score = 70;

if($am_score < 70){
    echo "不合格". PHP_EOL;
}elseif($pm_score < 70){
    echo "不合格". PHP_EOL. "次回は午前の試験が免除";
}else{
    echo "合格";
}
?>
```