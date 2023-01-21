<?php

use Config\Config;

require_once dirname(__DIR__) . '/Config/constants.php';
require_once BASE_DIR . '/vendor/autoload.php';


$dotenv = \Dotenv\Dotenv::createUnsafeImmutable(BASE_DIR);
$dotenv->load();

//try {
//    $pdo = new PDO(
//        'pgsql:host=db;dbname=postgres',
//        Config::get('db.user'),
//        Config::get('db.password')
//    );
//
//
//} catch (PDOException $exception){
//    echo('Exception' .  $exception->getMessage());
//}

try {
    var_dump(\Core\Db::connect());
} catch (PDOException $exception){
    var_dump('Exception', $exception->getMessage());
}