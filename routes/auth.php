
<?php
// show register form
$router->get("/register", 'User@show');
$router->post("/register", 'User@store');

// login 
$router->get("/login", "Auth@showLogin");
$router->post("/login", "Auth@login");
