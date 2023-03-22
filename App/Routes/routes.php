<?php 

use \Controllers\ProductController;

// We define our routes here
$router->get('api/v1/products', ProductController::class, 'getProducts');
$router->get('api/v1/product', ProductController::class, 'getProduct');
$router->validate('api/v1/product/validate', ProductController::class, 'validate');
$router->delete('api/v1/products', ProductController::class, 'deleteProducts');
$router->post('api/v1/product', ProductController::class, 'addProduct');