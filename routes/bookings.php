<?php

$router->get('/book', 'BookingController@create');


// api routes

// store a booking
$router->post('/api/book', 'BookingController@store');
