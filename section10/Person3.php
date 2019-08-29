<?php
class Person
{
    public $firstName;
    public $lastName;

    public function show()
    {
        echo "僕の名前は{$this->lastName}{$this->firstName}です。";
    }
}
?>