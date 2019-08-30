<?php
class FriendList implements IteratorAggregate {
    // ダミーのプロパティを定義
    public $version = '1.0.0';
    public $name = '友人リスト';
    // Personオブジェクトのリストを格納するためのprivate変数
    private $list = [];

    // 反復処理の対象を定義
    public function getIterator(): Traversable {
        return new ArrayIterator($this->list);
    }

    // personオブジェクトを追加するためのaddメソッド
    public function add(Person $p) {
        $this->list[] = $p;
    }
}
?>