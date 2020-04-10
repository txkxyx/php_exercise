# PHP基礎演習問題（分岐構文）

## 1. if_ex1.php

以下の要件に合う、認証プログラムを作成してください。

- IDが`PHPUser`でパスワードが`PHPPassword`の場合は認証可能（画面にOKと表示）
- 上記以外の場合は認証不可（画面にNGと表示）

#### IDが`PHPUser`でパスワードが`PHPPassword`の場合

```console
> php if_ex1.php
OK
```

#### IDが`JavaUser`でパスワードが`JavaPassword`の場合

```console
> php if_ex1.php
NG
```

<hr>

## 2. if_ex2.php

以下の要件に合う、ECサイトのポイント管理のプログラムを作成してください。

- 会員でない場合はポイントは付与されません。
- 通常会員の場合は100円購入ごとに1ポイントが付与されます。
- 特別会員の場合は通常会員の2倍のポイントが付与されます。

#### 会員ではなく、購入金額が2980円の場合

```console
> php if_ex2.php
point : 0
```

#### 通常会員で、購入金額が2980円の場合

```console
> php if_ex2.php
point : 29
```

#### 特別会員で、購入金額が2980円の場合

```console
> php if_ex2.php
point : 58
```

- ヒント

```php
<?php

$price = 2980;
$member = FALSE;
$special = FALSE;

$point = 0;

// TODO

echo "point : ". $point;
?>
```

<hr>

## 3. if_ex3.php

以下の要件に合う、とある資格試験の合否判定プログラムを作成してください。

- 資格試験は午前と午後の2つの試験に分かれています。
- 午前と午後の点数がともに70点以上であれば合格です。
- 午前の点数が70点以上で、午後の点数が69点以下である場合は、次回は午前の試験が免除になります。
- 上記以外の場合は不合格となります。

#### 午前：80点、午後：80点の場合

```console
> php if_ex3.php
合格
```

#### 午前：80点、午後：60点の場合

```console
> php if_ex3.php
不合格
次回は午前の試験が免除
```

#### 午前：60点、午後：60点の場合

```console
> php if_ex3.php
不合格
```