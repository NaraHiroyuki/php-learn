<?php require_once('encode.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ヘッダ情報</title>
</head>
<body>
<table border="1">
<?php
// $_SERVERのキー/値を取得
foreach($_SERVER as $key => $value) {
    // キー($key)が「HTTP_」で始まる場合のみ、その値を出力
    if (mb_strpos($key, 'HTTP') === 0) {
?>
    <tr valign="top">
    <th><?php echo $key ?></th>
    <td><?php echo $value ?></td>
    </tr>
<?php
    }
}
?>
</table>
</body>
</html>