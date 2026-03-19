<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new livre\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "livreController@index");
$router->get('/create', "livreController@create");
$router->post('/insert', "livreController@insert");
$router->get('/affiche/:id', "livreController@affiche");
$router->get('/delete/:id', "livreController@delete");
$router->get('/modify/:id', "livreController@modify");
$router->post('/confirm/:id', "livreController@confirm");






// $router->get('/', "livreController@showAll");




$router->run();
