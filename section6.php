<?php
// p219
function getTriangleArea(float $base, float $height): float{
    return $base * $height / 2;
}
$area = getTriangleArea(8, 10);
print "三角形の面積は{$area}です。";

//test
$area = getTriangleArea(8, 10);
print "三角形の面積は{$area}です。";

// p225
$x = 10;

function checkScope1(): int {
    global $x;
    return ++$x;
}

echo checkScope1(),"\n";
echo $x,"\n";
$x = "";
// p227 静的変数
function checkStatic(): int {
    static $x = 0;
    return ++$x;
}

echo checkStatic(),"\n";
echo checkStatic(),"\n";
echo $x;

// p228
function checkScope2(): string {
    require_once('scope_included.php');
    return $scope;
}
echo checkScope2(),"\n";

// p229 unset関数の挙動
$x = 10;
function checkScope3(): int {
    global $x;
    unset($x);
    return ++$x;
}

echo checkScope3(),"\n";
echo $x,"\n";

// 230 
function checkStatic2() {
    static $x = 0;
    $x++;
    echo "unset前:{$x}","\n";
    unset($x);
    $x = 13;
    echo "unset後:{$x}","\n";
}

checkStatic2();
checkStatic2();

// p231 引数のデフォルト値
function getTriangleArea2(float $base = 5, float $height = 1): float {
    return $base * $height /2;
}

$area = getTriangleArea2();
echo "三角形の面積は{$area}です。\n";
$area = getTriangleArea2(10);
echo "三角形の面積は{$area}です。\n";
$area = getTriangleArea2(10,5);
echo "三角形の面積は{$area}です。\n";

// p232 引数の参照渡し
function increment(int &$num): int {
    $num++;
    return $num;
}

$value = 10;
echo increment($value),"\n";
echo $value,"\n";

// p234 可変長引数の関数
function sum(float ...$args): float {
    // 結果を格納するための変数$result
    $result = 0;
    // 取得した引数を順に加算処理
    foreach ($args as $arg) {
        $result += $arg;
    }
    return $result;
}

echo sum(7, 3, 10),"\n";
echo sum(11, -5, 4, 88),"\n";

// 別解1
function sum2() {
    // 結果を格納するための変数$result
    $result = 0;
    // 引数を配列として取得
    $args = func_get_args();
    // 取得した引数を順に加算処理
    foreach ($args as $arg) {
        $result += $arg;
    }
    return $result;
}

echo sum2(7, 3, 10), "\n";
echo sum2(11, -5, 4, 88),"\n";

// 別解2
function sum3() {
    $result = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $result += func_get_arg($i);
    }
    return $result;
}

echo sum3(7, 3, 10), "\n";
echo sum3(11, -5, 4, 88),"\n";

// p237
function replaceContents(string $path, string ...$args): string {
    // 指定されたパスからファイルを読み込み
    $data = file_get_contents($path);
    // 可変長引数を順番に処理し、{0},{1},...と置き換え
    for ($i = 0; $i < count($args); $i ++) {
        $data = str_replace('{'.($i).'}', $args[$i], $data);
    }
    return $data;
}

// data.datを読み込み&出力
echo replaceContents('data.dat','鈴木太郎','2016年5月1日');

//[...]による引数のアンパック
echo getTriangleArea(...[10,5]);

// p239
function max_min(float ...$args): array {
    return [max($args), min($args)];
}

$result = max_min(10, 2, -5, 3, 78);
print_r($result);
list($max, $min) = max_min(10, 2, -5, 3, 78);
print "最大値:{$max}、最小値:{$min}";
echo "\n";

// p240 再帰関数
function factorial(int $num): int {
    if ($num != 0) {
        return $num * factorial($num-1);
    }
    return 1;
}

echo factorial(5);





?>