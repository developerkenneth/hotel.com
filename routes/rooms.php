<?php

//shows all rooms available
$router->get('/', 'RoomsController@index');
$router->get('/api', 'RoomsController@apiIndex');

// to create a new room
$router->post('/api', 'RoomsController@store');
