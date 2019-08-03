<?php
// foreach文
$data = ['貴江', '垣谷', "奈良", "臼井", "和田"];
foreach ($data as $value) {
    print "名前は{$value}";
    echo "\n";
}

// foreach文
$data = ['貴江' => '男', '垣谷' => '女', "奈良" => '男', "臼井" => '女', "和田" => '男'];
foreach ($data as $key => $value) {
    print "{$key} : {$value}";
    echo "\n";
}

// foreach文（参照渡し)
$data = ['貴江', '垣谷', "奈良", "臼井", "和田"];
foreach ($data as &$value) {
     $value = 'New' . $value;
}
print_r($data);

$data = ['貴江', '垣谷', "奈良", "臼井", "和田"];
foreach ($data as $value) {
    $value = 'New' . $value;
}
print_r($data);

// break文
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
    if ($sum > 1000) {
        break;
    }
}
print "合計が1000を超えるのは、1~{$i}を加算した時です";
echo "\n";

// continue文
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
    if ($sum > 1000) {
        continue;
    }
}
print "合計は{$sum}です";
echo "\n";

// ループのネストとbreak文/continue文
for($i = 1; $i < 10; $i++) {
    for($j = 1; $j < 10; $j++) {
        $result = $i * $j; 
        if ($result > 40) {
            break;
        }
        print "{$result} "; 
    }
    echo "\n";
}

for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        $result = $i * $j;
        if ($result > 40) {
            break 2;  // breakの後に脱出するループの階層を指定する
        }
        print "{$result} ";
    }
    echo "\n";
}

// $iを1~3で変化させるループ
for ($i = 1; $i <4; $i ++) {
    $result = 0;
    switch ($i) {
        case 1 :
        case 3 :
            // $i = 1,3 の場合のみ変数$resultを計算
            $result = $i * $i;
            break;
            case 2:
                continue;
    }
    print "{$i}の2乗は{$result}です。";
    echo "\n";
}

for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        $result = $i * $j;
        if ($result > 40) {
            goto end;
        }
        print "{$result} ";
    }
    echo "\n";
}
end :
echo "\n";

// 別構文
$x = 35;
if ($x > 20):
    print '変数$xは20より大きいです。';
elseif ($x > 10):
    print '変数$xは10より大きく、20,以下です。';
else:
    print '変数$xは10以下です。';
endif;
?>