<?php
require_once("lib/util.php");
//Shift_JISのデータを用意する
$utf8_string = "こんにちは。";
$sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIS');
//内部エンコーディングを調べる
$encoding = mb_internal_encoding();
// cken()でチェックする
if (cken([$sjis_string])) {
    echo '配列の値は、', $encoding, 'です。';
} else {
    echo '配列の値は', $encoding, 'ではありません。';
}
?>