<?php

//require_once __DIR__ . '/exceptions.php';
//require_once __DIR__ . '/traits.php';
//require_once __DIR__ . '/overloading.php';
//require_once __DIR__ . '/color.php';

try {
//    postgresql://[user[:password]@][netloc][:port][/dbname][?param1=value1&...]
    $pdo = new PDO('pgsql:host=hw-212-db-1;dbname=postgres','root','root');
    var_dump($pdo);
}catch (PDOException $exception){
    echo '<pre>'.print_r($exception->getMessage(), true).'<pre>';
    die();
}


