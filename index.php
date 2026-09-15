<?php

use App\Helpers\View;
use Bramus\Router\Router;


require __DIR__ . '/vendor/autoload.php';
$router = new Router();

$router->setNamespace("App\Controller");

$router->get('/', 'Home@showHomePage');
$router->mount('/rooms', function () use ($router) {
    require_once './routes/rooms.php';
});

$router->mount("/auth", function () use ($router) {
    require_once("./routes/auth.php");
});


$router->mount('/user', function () use ($router) {
    require_once('./routes/user.php');
});

$router->set404(function () {
    View::handleView('404.php');
});

$router->run();
