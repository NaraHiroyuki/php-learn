<?php
// p260
$now = new DateTime();
echo $now->format('Y年m月d日 H:i:s'),"\n";

// タイムゾーン
$dt1 = new DateTime(null, new dateTimeZone('Europe/London'));
echo $dt1->format('Y年m月d日 H時i分'),"\n";

$now = new DateTime();
echo $now->format('Y年m月d日 (D) g:i:s a'),"\n";
echo $now->format('当月の日数:t日'), "\n";
echo $now->format('L') ? '閏年です' : '閏年ではありません', "\n";
echo $now->format(DateTime::RSS), "\n";

// p266
$fmt = 'Y年m月d日 H時i分s秒';
$time = '2016年08月05日 11時58分32秒';
$dt = DateTime::createFromFormat($fmt, $time);
echo $dt->format('Y-m-d H:i:s'), "\n";

$dt = new DateTime('2016/5/15 10:58:31');
echo $dt->format('Y年m月d日 H時i分'), "\n";
$dt->add(new DateInterval('P1YT10H'));
echo $dt->format('Y年m月d日 H時i分'), "\n";
$dt->sub(new DateInterval('P3MT20M'));
echo $dt->format('Y年m月d日 H時i分'), "\n";

// p267 日付/時刻値の差分を取得する
$dt1 = new DateTime('2016/5/15 10:58:31');
$dt2 = new DateTime('2016/12/04');
$interval = $dt1->diff($dt2, true);
print $interval->format('%Y年%M月%d日　%H時間%I分%S秒');

// p269 checkdate関数
function calendar ($year, $month) {
    for ($i = 1; $i < 32; $i ++) {
        if (checkdate($month, $i, $year)) {
            echo "{$i}"," ";
        }
    }
}
echo "2016年2月のカレンダー,\n";
calendar(2016, 2);








?>