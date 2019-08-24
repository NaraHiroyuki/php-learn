<?php require_once('encode.php'); ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>クッキー情報</title>
</head>

<body>
<form method="POST" action="cookie2.php.php">
<label for="email">メールアドレス:</label>
<input id="name" type="text" name="email" size="40" value="<?= e($_COOKIE['email'] ?? '') ?>" />
<input type="submit" value="送信" />
</form>
</body>

</html>