<?php
// 配列の文字エンコードのチェックを行う
function cken(array $data) {
    $result = true;
    foreach ($data as $key => $value) {
        if (is_array($value)){
            // 含まれている値が配列の時文字列に連結する
            $value = implode("", $value);
        }
        if (!mb_check_encoding($value)) {
            // 文字エンコードが一致しないとき
            $result = false;
            // foreachでの走査をブレイクする
            break;
        }
    }
    return $result;
}
?>