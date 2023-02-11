<?php 

require_once('./Person.php');

$galih = new Person("galih", "perum");
$galih->name = 'Galih adhi kusuma';


$galih->sayHello($galih->name);
$galih->spillAuthor();

