<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テキストエリア</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>

  <?php
  require_once("/Users/narahiroyuki/workspace/php-db/chapter9/util.php");
  // 文字エンコードの検証
  if (!cken($_POST)){
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " . $encoding ;
      // エラーメッセージを出して、以下のコードをすべてキャンセルする
      exit($err);
  }
  ?>

  <?php
  // POSTされたテキスト文を取り出す
  if (isSet($_POST["note"])){
      $note = $_POST["note"];
      // HTMLタグやPHPタグを削除する
      $note = strip_tags($note);
      // 最大150文字だけ取り出す(改行コードもカウントする)
      $note = mb_substr($note, 0, 150);
      // HTMLエスケープを行う
      $note = es($note);
  } else {
      // POSTされた値がないとき
      $note = "";
  }
  ?>
  
  <!-- 入力フォームを作る(現在のページにPOSTする) -->
  <form method="post" action="<?PHP echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>ご意見:</span>
        <textarea name="note" cols="30" rows="5" maxlength="150" placeholder="コメントをどうぞ">
          <?php echo $note; ?>
        </textarea>
      </li>
      <li><input type="submit" value="送信する"></li>
    </ul>
  </form>  

  <?php
    // テキストが入力されていれば表示する
    $length = mb_strlen($note);
    if ($length>0) {
        echo "<HR>";
        // 改行コードも前に<br>を挿入する
        $note_br = nl2br($note, false);
        echo $note_br;
    }
  ?>
</div>
</body>
</html>