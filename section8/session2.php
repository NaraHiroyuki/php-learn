<?php 
session_start();
$_SESSION['email'] = $_POST['email'];
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>クッキー情報</title>
</head>

<body>
セッション情報を保存しました。
</body>

</html>