<?php
// p196
// 書き込み内容を配列$dataにセット
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];
$data[] = $_SERVER['HTTP_REFERER'];

// access.logを追記書き込みモードでオープン
$file = @fopen('access.log', 'ab') or die('ファイルを開けませんでした!');
// ファイルをロック
flock($file, LOCK_EX);
// ファイルの書き込み
fwrite($file, implode("\t", $data). "\ñ");
// ロックの解除
flock($file, LOCK_UN);
// ファイルのクローズ
fclose($file);
echo 'アクセスログを記録しました。', "\n";




?>