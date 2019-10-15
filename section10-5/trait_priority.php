<?php
class MyParent {
    public function hoge() {
        echo 'MyParent!!';
    }
}

trait MyTrait {
    public function hoge() {
        echo 'MyTrait!!';
    }
}

// MyParentクラス、MyTraitクラスを継承
class MyChild extends MyParent {
    use MyTrait;

    public function hoge() {
        echo 'MyChild!!';
    }
}

$cls = new MyChild();
$cls->hoge();
?>