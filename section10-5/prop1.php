<?php 
require_once('Person2.php');
$p = new Person();

$p->lastName = "山田";
$p->firstName = "太郎";
echo "僕の名前は{$p->lastName}{$p->firstName}です。";
?>