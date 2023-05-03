<?php
$router = $di->getRouter();

// Define your routes here
$router->add('/users', 'Index::index')->via(['GET']);
$router->add('/users', 'Index::create')->via(['POST']);
$router->add('/users/{id:[0-9]+}', 'Index::update')->via(['PUT']);
$router->add('/users/{id:[0-9]+}', 'Index::show')->via(['GET']);
$router->add('/users/{id:[0-9]+}', 'Index::delete')->via(['DELETE']);

$router->handle($_SERVER['REQUEST_URI']);

