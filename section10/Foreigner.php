<?php
require_once('Person4.php');

class Foreigner extends Person {
    // 新たに追加したmiddleNameプロパティ
    public $middleName;

    // スーパークラスのコンストラクタをオーバーライド
    public function __construct(string $firstName, string $middleName, string $lastName) {
        // スーパークラスのコンストラクタを呼び出し
        parent::__construct($firstName, $lastName);
        // 独自のmiddleNameプロパティを初期化
        $this->middleName = $middleName;
    }
    // middleNameプロパティ対応にshowメソッドもオーバーライド
    public function show(){
        echo "僕の名前は{$this->lastName}{$this->middleName}{$this->firstName}です。";
    }
}
