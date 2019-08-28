<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>アップロード処理</title>
</head>
<body>
<!--アップロード時はenctype属性に注意-->    
<form method="POST" action="file2.php" enctype="multipart/form-data">
<label for="upfile">ファイルのパス:</label>
<input type="hidden" name="max_file_size" />
<input id="upfile" type="file" name="upfile" size="40" />
<input type="submit" value="アップロード" />
</form>
</body>
</html>