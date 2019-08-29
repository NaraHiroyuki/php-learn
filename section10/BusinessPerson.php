<?php
require_once('Person4.php');

class BusinessPerson extends Person {
    // サブクラス独自のworkメソッドを定義
    public function work () {
        echo "{$this->lastName}{$this->firstName}は働いています。";
    }
}
?>