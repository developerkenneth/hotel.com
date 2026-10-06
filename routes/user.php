<?php

$router->before('GET|POST|DELETE|PATCH|PUT', '/.*', 'Auth@unauthorizeRequest');
$router->get("/dashboard", 'User@dashboard');
$router->get("/settings", 'User@showUpdateProfileForm');
$router->get("/settings", 'User@showSettings');
$router->put("/settings/update", 'User@updateUser');
$router->patch('/update-password', 'User@passwordUpdate');
$router->get('/booking-history', 'User@bookingHistory');
$router->get("/profile", "Profile@profilePage");
$router->get("/bookings", "User@showBookings");
