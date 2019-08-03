<?php
// 文字列の長さを取得する
mb_internal_encoding('UTF-8');
$str = 'WINGSプロジェクト';
print mb_strlen($str);

//文字列を変換する
print strtolower('WINGSプロジェクト');
print strtoupper('wingsプロジェクト');
print lcfirst('WINGS PROJECT');
print ucfirst('wings project');
print ucwords('wings project');

// 部分文字列を取得する
$str = 'WINGSプロジェクト';
print mb_substr($str, 5 , 2);
echo "\n";
print mb_substr($str, 5);
echo "\n";
print mb_substr($str, 5, -4);
echo "\n";
print mb_substr($str, -6, 2);
echo "\n";

// 部分文字列を置換する
$str = 'にわにはにわにわとりがいる';
print str_replace('にわ', 'ニワ', $str, $cnt).'<br />';
print "{$cnt}個の置き換えをしました。";

$str = ['PHPは良い言語です。','PHPは良いサーバ実行環境です。'];
$src = ['PHP', '良い'];
$rep = ['PHP 7', '素晴らしい'];
print_r(str_replace($src, $rep, $str, $cnt));
print "{$cnt}個の置き換えをしました。";

//文字列の分割
$data = 'リオとニンザブロウとナミとリンリン';
print_r(explode('と',$data));
print_r(explode('や', $data));
print_r(explode('と', $data, 2));
print_r(explode('と', $data, -2));

//特定の文字位置を検索する
$str = 'にわにはにわにわとりがいる';
print mb_strpos($str, 'にわ');
print mb_strpos($str, 'にわ', 2);
print mb_strpos($str, 'かに');
print mb_strrpos($str, 'にわ');
print mb_strrpos($str, 'にわ', -8);

// 戻り値が0の場合==,!=演算子ではfalseと見なされてしまうので===,!==を使う。
$str = 'にわにはにわにわとりがいる';
if (mb_strpos($str, 'にわ') !== false) {
    print '文字列が見つかりました。';    
}

//文字列を整列する
printf('%sは%sです。','ニンザブロウ','ハムスター');
printf('売上平均(前月比):%+0-8.3f', 0.19865);
printf("売上平均(前月比):%'*10.3e", 0.19865);
printf('%.6sは%sです。','ニンザブロウ','ハムスター');
printf('%2$sは%1$sです。%2$s,大好き!','ニンザブロウ','ハムスター');

// 文字列を変換する
$str = 'WINGSプロジェクト';
print mb_convert_kana($str, 'RKV');

//文字エンコーディング
echo "\n";
print mb_convert_encoding('こんにちは、赤ちゃん!','EUC-JP','UTF-8, SJIS, JIS');

echo "\n";
$data = ['和田','杉山','杉沼','永田','星山'];
mb_convert_variables('EUC-JP', 'UTF-8, SJIS, JIS', $data);
print_r($data);

// count関数
echo "\n";
$data = ['和田', '杉山', '杉沼', '永田', '星山'];
print count($data);

// 配列連結
$ary1 = [1,3,5];
$ary2 = [2,3,6];
$result = array_merge($ary1, $ary2);
print_r($result);

// キーが重複している場合後者が優先される
$assoc1 = ['Apple' => 'Red', 'Orange' => 'Yellow', 'Melon' => 'Green'];
$assoc2 = ['Grape' => 'Purple', 'Apple' => 'Green', 'Strawberry' => 'Red'];
$result = array_merge($assoc1,$assoc2);
print_r($result);

// 入れ子の配列を生成する
$assoc1 = ['Apple' => 'Red', 'Orange' => 'Yellow', 'Melon' => 'Green'];
$assoc2 = ['Grape' => 'Purple', 'Apple' => 'Green', 'Strawberry' => 'Red'];
$result = array_merge_recursive($assoc1, $assoc2);
print_r($result);

// 配列要素を結合する
$data = ['PHP', 'Perl', 'Ruby', 'Python', 'JavaScript'];
print implode(',', $data);

// 配列の編集
$data = ['高江','青木','片渕'];
print array_push($data, '山田', '土井');
print_r($data);

print array_pop($data);
print_r($data);

print array_shift($data);
print_r($data);

print array_unshift($data,'掛谷','横塚','上垣');
print_r($data);

//配列の複数要素を追加、置換、削除
$data = ['高江', '青木', '片渕','和田','花田','佐藤'];
print_r(array_splice($data,2,3,['日尾','掛谷','臼井']));
print_r($data);
print_r(array_splice($data, -3, -2, ['長田', '杉山']));
print_r($data);
print_r(array_splice($data, 3));
print_r($data);
print_r(array_splice($data, 1, 0, ['山田', '矢吹']));
print_r($data);

//特定範囲の要素を取得する
$data = ['高江', '青木', '片渕', '和田', '花田', '佐藤'];
print_r(array_slice($data, 2, 3));
print_r(array_slice($data,2,3,true));
print_r(array_slice($data,4));
print_r(array_slice($data,-4,-3));

// 特定の内容を検索する
$data = ['PHP', 'JavaScript','PHP','Java', 'C#', '15'];
var_dump(array_search('JavaScript',$data));
var_dump(array_search('PHP', $data));
var_dump(array_search('JAVA',$data));
var_dump(array_search(15,$data));
var_dump(array_search(15,$data,true));

// 特定の要素が存在するか確認する
$data = ['PHP', '' => 'JavaScript','PHP','Java','C#','15'];
if(!array_search('PHP',$data)===false){
    print '見つかりませんでした';
}

//　sort関数
$data = ['Tennis','Swimming','Soccer','Baseball'];
sort($data, SORT_STRING);
print_r($data);

rsort($data, SORT_STRING);
print_r($data);

$data2 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11, 'Baseball' => 9];
sort($data, SORT_NUMERIC);
print_r($data2);

$data3 = ['Tennis' => 1, 'Swimming' => 1, 'Soccer' => 11, 'Baseball' => 9];
asort($data3, SORT_NUMERIC);
print_r($data3);

ksort($data3, SORT_STRING);
print_r($data3);

// 正規表現
$str = '彼の電話番号は0399-88-9785、私のは0398-99-1234です。郵便番号はどちらも687-1109です。';
if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',$str,$data)){
    print "電話番号:{$data[0]}";
    print "市外局番:{$data[1]}";
    print "市内局番:{$data[2]}";
    print "加入者番号:{$data[3]}";
    print_r($data);
}


?>