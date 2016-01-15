<?php
require_once '..\vendor\autoload.php';

//$user= new \nelsonPHP\User("nelson","1234" );
$user= new NelsonPHP\User($email, $password);
$user->setName("nelson","martinez");
var_dump($user);