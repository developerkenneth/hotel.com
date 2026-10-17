<?php

//shows all rooms available
$router->get('/', 'RoomsController@index');
$router->get('/api', 'RoomsController@apiIndex');

// to create a new room
$router->post('/api', 'RoomsController@store');

// to delete a room
$router->delete('/room/(\d+)', 'RoomsController@deleteRoom');

// to edit room
$router->get('/edit-room', 'RoomsController@editRoom');
$router->patch('/edit-room/(\d+)', 'RoomsController@modify');