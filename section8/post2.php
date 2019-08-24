<?php require_once('encode.php') ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <title>ポストデータ</title>
</head>

<body>
    こんにちは、<?= e($_POST['name']) ?>さん!
</body>

</html>