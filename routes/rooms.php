<?php

//shows all rooms available
$router->get('/', 'RoomsController@index');
$router->get('/api', 'RoomsController@apiIndex');

// to create a new room
<<<<<<< HEAD
$router->post('/api', 'RoomsController@create');
 
=======
$router->post('/api', 'RoomsController@store');
>>>>>>> ef6aaca0813f2dd540382eb10fa856e5e0ec9247
