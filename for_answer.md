# PHP基礎演習解答例（反復構造）

## 1. for_ex1.php

以下のようなプログラムを作成してください。

- 1～100までの整数を画面に表示してください。
- 3の倍数の場合は、数字の横に`Fizz`と表示してください。
- 5の倍数の場合は、数字の横に`Buzz`と表示してください。
- 15の倍数の場合は、数字の横に`FizzBuzz`と表示してください。

```php
<?php

for ($i=1; $i <= 100 ; $i++) { 
    echo $i;
    if($i % 3 === 0 && $i % 5 === 0){
        echo "FizzBuzz";
    }elseif($i % 3 === 0){
        echo "Fizz";
    }elseif($i % 5 === 0){
        echo "Buzz";
    }
    echo PHP_EOL;
}
?>
```

<hr>

## 2. for_ex2.php

九九の表を出力してください。表はきれいに整形しなくても大丈夫です。

```php
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
```

<hr>

## 3. for_ex3.php

以下のような図を表示してください。

```console
> php for_ex3.php
     *
    **
   ***
  ****
 *****
```

- 解答例

```php
<?php
$row = 5;

for ($i=1; $i <= $row; $i++) { 
    $space = $row - $i;
    for ($j=0; $j < $space; $j++) { 
        echo " ";
    }
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
    echo PHP_EOL;
}
?>
```

<hr>

## 4. for_ex4.php

以下のようなピラミッドを表示してください。

```console
> php for_ex4.php
     *
    ***
   *****
  *******
 *********
```

- 解答例

```php
<?php
$row = 5;

for ($i=1; $i <= $row; $i++) { 
    $space = $row - $i;
    for ($j=0; $j < $space; $j++) { 
        echo " ";
    }
    $item = $i*2 - 1;
    for ($j=0; $j < $item; $j++) { 
        echo "*";
    }
    echo PHP_EOL;
}
?>
```

<hr>

## 5. for_ex5.php

以下のようなピラミッドを表示してください。

```console
> php for_ex5.php
 *********
  *******
   *****
    ***
     *
```

- 解答例

```php
<?php
$row = 5;

for ($i=$row; $i > 0; $i--) { 
    $space = $row - $i;
    for ($j=0; $j < $space; $j++) { 
        echo " ";
    }
    $item = $i*2 - 1;
    for ($j=0; $j < $item; $j++) { 
        echo "*";
    }
    echo PHP_EOL;
}
?>
```