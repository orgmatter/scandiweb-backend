<?php 

use App\Routes\Router;
use App\Controllers\ProductController;

$productController = new ProductController;

$app = [
    "router" => new Router,
    "load" => Router::load('./App/Routes/routes.php'),
];

return $app;