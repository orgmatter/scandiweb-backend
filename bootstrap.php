<?php 

use App\Routes\Router;

$app = [
    "router" => new Router,
    "load" => Router::load('./routes.php'),
];

return $app;