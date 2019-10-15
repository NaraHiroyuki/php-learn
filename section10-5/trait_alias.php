<?php
trait MyTrait1 {
    public function hoge() {
        echo 'MyTrait1';
    }
}

trait MyTrait2 {
    public function hoge() {
        echo 'MyTrait2';
    }
}

// MyTrait1/MyTrait2を有効化
class Myclass {
    use MyTrait1, Mytrait2{
        MyTrait1::hoge insteadof MyTrait2;
        MyTrait2::hoge as foo;
    }
}

$cls = new MyClass();
$cls->hoge();
$cls->foo();
?>