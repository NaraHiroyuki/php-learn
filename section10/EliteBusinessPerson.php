<?php
require_once('BusinessPerson.php');

class EliteBusinessPerson extends BusinessPerson {
    public function work() {
        echo "{$this->lastName}{$this->firstName}はバリバリ働いています。";
    }
}
?>