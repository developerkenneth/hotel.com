<?php

$router->before('GET|POST|DELETE|PATCH|PUT', '/.*', 'Auth@unauthorizeRequest');
$router->get("/dashboard", 'User@dashboard');
$router->get("/booking-history", 'User@bookingHistory');
$router->get("/settings", 'User@showSettings');
