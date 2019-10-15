<?php 
require_once('BusinessPerson.php');

class HetareBusinessPerson extends BusinessPerson {
    // BusinessPersonクラスのeorkメソッドをオーバーライド
    public function work() {
        parent::work();   // スーパークラスのworkメソッド
        echo 'ただし、ボチボチと…';   // 独自の処理
    }
}
?>