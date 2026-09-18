<?php

$router->get('/book/(\d+)', 'BookingController@create');

// api routes

// store a booking
$router->post('/api/book', 'BookingController@store');
