<?php

$router->before('GET|POST|DELETE|PATCH|PUT', '/.*', 'Auth@adminRequest');
$router->get('/dashboard', 'AdminController@dashboard');
$router->get('/rooms', 'AdminController@rooms');
$router->get('/management', 'AdminController@management');
$router->patch('/api/user', 'AdminController@suspendUser');
