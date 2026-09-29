<?php

$router->get('/book/(\d+)', 'BookingController@create');
$router->get('/receipt/(\w+)', 'BookingController@showReceipt');
// api routes

// store a booking
$router->post('/api/book', 'BookingController@store');
