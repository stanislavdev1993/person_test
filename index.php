<?php

require 'PersonInterface.php';
require 'Person.php';
require 'PersonRepository.php';

$person = new Person();
$person->setAttributes([
    'first_name' => 'Ivan',
    'last_name' => 'Ivanov',
    'age' => 18,
    'birth_date' => '06.05.1992'
]);

$dsn = 'mysql:host=localhost;db_name=test;charset=utf8';
$repository = new PersonRepository(new PDO($dsn, 'root', 'rootbla'));
$repository->save($person);