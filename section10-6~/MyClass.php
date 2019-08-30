<?php
class MyClass {
    // それぞれのアクセス権限でプロパティを定義
    public $pub = 'public';
    protected $pro = 'protected';
    private $pri = 'private';

    // プロパティをリスト表示するためのshowPropertyメソッド
    public function showProperty() {
        foreach ($this as $key => $value) {
            echo "{$key}:{$value}";
        }
    }
}
?>