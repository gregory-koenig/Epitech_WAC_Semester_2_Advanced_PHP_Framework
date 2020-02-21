<?php

$router->get('/', 'App#indexAction');

$router->get('/404', 'App#notFoundAction');

$router->get('/user', 'User#indexAction');

$router->get('/user/register', 'User#registerView');
$router->post('/user/register', 'User#registerAction');

$router->get('/user/login', 'User#loginView');
$router->post('/user/login', 'User#loginAction');

$router->get('/user/delete', 'User#deleteView');
$router->post('/user/delete', 'User#deleteAction');