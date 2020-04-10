# PHP基礎演習解答例（分岐構文）

## 1. if_ex1.php

以下の要件に合う、認証プログラムを作成してください。

- IDが`PHPUser`でパスワードが`PHPPassword`の場合は認証可能（画面にOKと表示）
- 上記以外の場合は認証不可（画面にNGと表示）

```php
<?php

$id = "phpuser";
$password = "PHPPassword";

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
$member = FALSE;
$special = FALSE;

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