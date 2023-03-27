<?php 

use App\Routes\Router;

$app = [
    "router" => new Router,
    "load" => Router::load('./src/App/Routes/routes.php'),
];

return $app;