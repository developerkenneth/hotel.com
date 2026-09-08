<?php

$router->before('GET|POST|DELETE|PATCH|PUT', '/.*', 'Auth@unauthorizeRequest');
$router->get("/dashboard", 'User@dashboard');
$router->get("/settings", 'User@showSettings');
