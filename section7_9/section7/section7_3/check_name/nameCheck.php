<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>フォーム入力チェック</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>

<?php
  require_once("/Users/narahiroyuki/workspace/php-db/chapter8_2/lib_cken/lib/util.php");
  require_once("/Users/narahiroyuki/workspace/php-db/chapter8_2/lib_es/lib/util.php");
  // 文字エンコードの検証
  if (!cken($_POST)){
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is" . $encoding;
      // エラーメッセージを出して、以下のコードをすべてキャンセルする
      exit($err);
  }
  // HTMLエスケープ(XSS対策)
  $_POST = es($_POST);
?>

<?php
  // エラーフラグ
  $isError = false;
  // 名前を取り出す
  if (isset($_POST['name'])){
      $name = trim($_POST['name']);
      if ($name===""){
          // 空白の時エラー
          $isError = true;
      }
  } else {
      // 未設定の時エラー
      $isError = true;
  }
?>

<?php if ($isError): ?>
  <!-- エラーがあった時　-->
  <span class="error">名前を入力してください。</span>
  <form method="POST" action="namecheckForm.php">
    <input type="submit" value="戻る">
  </form>
<?php else: ?>
  <!-- エラーがなかった時 -->
  <span>
  こんにちは、<?php echo $name; ?>さん。
  </span>
<?php endif; ?>

</div>
</body>
</html>