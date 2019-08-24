<?php require_once('encode.php') ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <title>チェックボックス</title>
</head>

<body>
    <?php
    echo '<p>好きな色: ';

    if (is_array($_POST['arch'])) {
        echo implode(',', $_POST['arch']);
    }
    echo '</p>';
    ?>
</body>

</html>
