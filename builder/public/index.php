<?php
require __DIR__ . '/../vendor/autoload.php';


use App\MySQLQueryBuilder;

$query = (new MySQLQueryBuilder())
    ->select('prenom, nom, age')
    ->from('users')
    ->where('age > 18')
    ->orderBy('age')
    ->getQuery();

var_dump($query);