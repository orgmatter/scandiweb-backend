<?php 

use App\Routes\Router;

echo "hello world";

$app = [
    "router" => new Router,
    "load" => Router::load('./src/App/Routes/routes.php'),
];

return $app;