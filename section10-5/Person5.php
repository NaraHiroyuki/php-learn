<?php
class Person {
    public $firstName;
    public $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct() {
        echo __CLASS__.'オブジェクトが破棄されました。';
    }

    public function show()
    {
        echo "僕の名前は{$this->lastName}{$this->firstName}です。";
    }
}
?>