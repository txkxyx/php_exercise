# PHP基礎演習解答（連想配列）

## 1. dict_ex1.php

Aさんの試験の結果は以下のようでした。

```
国語：80
数学：75
社会：88
理科：90
英語：65
```

Aさんの試験結果を格納した連想配列を作成してください。
さらにAさんの平均点を求めてください。

- 実行結果

```console
> $ php dict_ex1.php
国語 : 80
数学 : 75
社会 : 88
理科 : 90
英語 : 65
平均点 : 79.6
```

- 解答例

```php
<?php

$scores = ["国語" => 80, "数学" => 75, "社会" => 88, "理科" => 90, "英語" => 65];

$total = 0;
foreach($scores as $key => $score){
    echo $key. " : ". $score. PHP_EOL;
    $total += $score;
}

$average = $total / count($scores);
echo "平均点 : ". $average;
?>
```


## 2. dict_ex2.php

次のような試験結果があります。

| 名前 | 国語 | 数学 | 社会 | 理科 | 英語 |
| --- | --- | --- | --- | --- | --- |
| Aさん | 80 | 75 | 88 | 90 | 65 |
| Bさん | 67 | 55 | 74 | 83 | 79 |
| Cさん | 90 | 87 | 90 | 87 | 92 |
| Dさん | 78 | 90 | 79 | 74 | 89 |
| Eさん | 92 | 80 | 78 | 91 | 75 |

Aさん～Eさんまでのそれぞれの平均点を求めてください。

- 実行結果

```console
> dict_ex2.php
Aさんの平均点 : 79.6
Bさんの平均点 : 71.6
Cさんの平均点 : 89.2
Dさんの平均点 : 82
Eさんの平均点 : 85
```

- 解答例

```php
<?php

$users = [
    "A" => ["Japanese" => 80, "Math" => 75, "Society" => 88, "Science" => 90, "English" => 65],
    "B" => ["Japanese" => 67, "Math" => 55, "Society" => 74, "Science" => 83, "English" => 79],
    "C" => ["Japanese" => 90, "Math" => 87, "Society" => 90, "Science" => 87, "English" => 92],
    "D" => ["Japanese" => 78, "Math" => 90, "Society" => 79, "Science" => 74, "English" => 89],
    "E" => ["Japanese" => 92, "Math" => 89, "Society" => 78, "Science" => 91, "English" => 75],
];

foreach ($users as $user => $scores) {
    $total = 0;
    foreach($scores as $subject => $score){
        $total += $score;
    }
    $average = $total / count($scores);
    echo $user."さんの平均点 : ". $average. PHP_EOL;
}
?>
```

## 3. dict_ex3.php

次のような試験結果があります。

| 名前 | 国語 | 数学 | 社会 | 理科 | 英語 |
| --- | --- | --- | --- | --- | --- |
| Aさん | 80 | 75 | 88 | 90 | 65 |
| Bさん | 67 | 55 | 74 | 83 | 79 |
| Cさん | 90 | 87 | 90 | 87 | 92 |
| Dさん | 78 | 90 | 79 | 74 | 89 |
| Eさん | 92 | 80 | 78 | 91 | 75 |

各教科ごとの合計点と平均点を求めてください。

- 実行結果

```console
> dict_ex3.php
Japaneseの平均点 : 81.4
Mathの平均点 : 79.2
Societyの平均点 : 81.8
Scienceの平均点 : 85
Englishの平均点 : 80
```

- 解答例

```php
<?php

$users = [
    "A" => ["Japanese" => 80, "Math" => 75, "Society" => 88, "Science" => 90, "English" => 65],
    "B" => ["Japanese" => 67, "Math" => 55, "Society" => 74, "Science" => 83, "English" => 79],
    "C" => ["Japanese" => 90, "Math" => 87, "Society" => 90, "Science" => 87, "English" => 92],
    "D" => ["Japanese" => 78, "Math" => 90, "Society" => 79, "Science" => 74, "English" => 89],
    "E" => ["Japanese" => 92, "Math" => 89, "Society" => 78, "Science" => 91, "English" => 75],
];

$totals =[
    "Japanese" => 0,
    "Math" => 0,
    "Society" => 0,
    "Science" => 0,
    "English" => 0,
];

foreach ($users as $user => $scores) {
    foreach ($scores as $subject => $score) {
        $totals[$subject] += $score;
    }
}

foreach ($totals as $subject => $total) {
    $average = $total / count($users);
    echo $subject."の平均点 : ". $average.PHP_EOL;
}
?>
```