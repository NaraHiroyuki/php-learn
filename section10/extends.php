<?php 
require_once('BusinessPerson.php');

$bp = new BusinessPerson('博之', '山田');
$bp->work();
$bp->show();
?>