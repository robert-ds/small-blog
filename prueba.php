<?php
require_once 'vendor/autoload.php';

$user = new \codePHP\Author('fakeEmail@foot.com','1234');

$user->setName('Robert','Vásquez');
echo $user->getFirstName();
echo PHP_EOL;
echo $user->getLastName();

//var_dump($user);