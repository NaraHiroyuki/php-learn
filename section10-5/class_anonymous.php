<?php
interface Runnable {
    function run();
}

class MyClass {
    public function execute(Runnable $rc) {
        // ダミー処理(本来は何らかの前処理を実行)
        echo 'start…';
        // 利用者側から指定された処理を実行
        $rc->run();
        // ダミー処理(本来は何らかの後処理を実行)
        echo 'end…';
    }
}

$cls = new MyClass();
// Runnable実装クラスを引数に渡す
$cls->execute(new class implements Runnable {
    public function run() {
        echo 'process…';
    }
});
?>