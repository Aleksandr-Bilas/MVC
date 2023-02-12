<?php


$router->add('parks/{id:\d+}/update', [
    'controller' => \App\Controllers\ParksContoller::class,
    'action' => 'update',
    'method' => 'POST'
    ]);

$router->add('parks/{id:\d+}/show', [
    'controller' => \App\Controllers\ParksController::class,
    'action' => 'show',
    'method' => 'GET'
]);