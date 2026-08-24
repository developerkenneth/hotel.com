<?php

use Bramus\Router\Router;
use App\Controller\Home;
use App\Controller\User;


require __DIR__ . '/vendor/autoload.php';
$router = new Router();

// $router->setNamespace("App\Controller");

$router->mount("/auth", function () use ($router) {
    // show register form
    $router->get("/register", 'App\Controller\User@show');
    $router->post("/register", 'App\Controller\User@store');
    // $router->get("/login", "User@show");
});








$router->set404(function () {
    echo "404";
});

$router->run();
