<?php
require_once dirname(__DIR__) . '/Config/constants.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';


$dotenv = Dotenv::createUnsafeImmutable(BASE_DIR);
$dotenv->load();

try {
    $pdo = new PDO(
        'pgsql:host=db;dbname=postgres',
        Config::get('db.user'),
        Config::get('db.password')
    );
   echo Config::get('db.user');

} catch (PDOException $exception){
    echo('Exception' .  $exception->getMessage());
}


