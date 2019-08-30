<?php
require_once('Person.php');
require_once('FriendList.php');
// FriendlistオブジェクトにPersonオブジェクトをセット
$list = new FriendList();
$list->add(new Person('太郎', '山田'));
$list->add(new Person('奈緒', '柿谷'));
$list->add(new Person('賢', '高江'));

// Friendlistオブジェクトの内容を順に処理し、そのPerson::showメソッドを実行
foreach ($list as $value) {
    echo $value->show();
}
?>