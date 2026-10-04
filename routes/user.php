<?php

$router->before('GET|POST|DELETE|PATCH|PUT', '/.*', 'Auth@unauthorizeRequest');
$router->get("/dashboard", 'User@dashboard');
$router->get("/settings", 'User@showUpdateProfileForm');
$router->get("/settings", 'User@showSettings');
$router->post("/settings/update", 'User@updateUser');
