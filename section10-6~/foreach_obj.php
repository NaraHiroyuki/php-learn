<?php
require_once('MyClass.php');

$cls = new MyClass();
// Myclassオブジェクトのプロパティをリスト表示
foreach ($cls as $key => $value) {
    echo "{$key}:{$value} <br />";
}
print '<hr />';
// MyClassオブジェクトのプロパティをリスト表示
$cls->showProperty();

?>