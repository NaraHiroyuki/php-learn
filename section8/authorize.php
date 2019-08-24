<?php
// 認証ユーザ名が送信されているかどうかを判定
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    // 認証ユーザが未送信の場合は未認証ステータスを発行(ダイアログを表示)
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="SelfPHP');
    print 'この画面へのアクセスは認められませんでした。';
    die();
// 認証ユーザ名が送信されている場合はユーザ名/パスワードを確認
} else {
    // 認証の成否に応じて対応するメッセージを表示
    if ($_SETVER['PHP_AUTH_USER'] === 'admin_usr' &&
    $_SERVER['PHP_AUTH_PW'] === 'admin_pass') {
        print '正しく認証が行われました。';
    } else {
        print 'ユーザ名、またはパスワードが間違っています。';
    }
}
?>